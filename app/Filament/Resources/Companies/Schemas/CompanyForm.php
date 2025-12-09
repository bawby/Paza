<?php

namespace App\Filament\Resources\Companies\Schemas;

use App\Enums\County;
use App\Models\Company;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Company Details')
                    ->description('Provide the necessary information about the company.')
                    ->columns(3)
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->unique(Company::class, 'name', ignoreRecord: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->disabled()
                            ->dehydrated()
                            ->maxLength(255)
                            ->unique(Company::class, 'slug', ignoreRecord: true),
                        TextInput::make('kra_pin')
                            ->label('KRA PIN')
                            ->required()
                            ->unique()
                            ->maxLength(255),
                        SpatieMediaLibraryFileUpload::make('logo')
                            ->label('Company Logo')
                            ->image()
                            ->visibility('public')
                            ->collection('logo')
                            ->conversion('thumb')
                            ->maxSize(512)
                            //->responsiveImages()
                            /* ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',]) */
                            /* ->mediaName(fn (TemporaryUploadedFile $file): string => Str::lower(
                                function (Get $get) {
                                    return $get('slug');
                                }) . '_logo' . Str::random()) */
                            //->directory('company-logos')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
                Section::make('Contact Information')
                    ->description('Provide the contact details for the company.')
                    ->columns(2)
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email Address')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('phone')
                                    ->label('Phone Number')
                                    ->tel()
                                    ->placeholder('+254700123456')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('website')
                                    ->label('Website URL')
                                    ->url()
                                    ->maxLength(255),
                            ])
                            ->columnSpanFull(),
                        TextInput::make('postal_address')
                            ->label('Postal Address')
                            ->maxLength(255),
                        TextInput::make('postal_code')
                            ->label('Postal Code')
                            ->numeric()
                            ->maxLength(20),
                    ])
                    ->columnSpanFull(),
                Section::make('Location Details')
                    ->description('Provide the location details for the company.')
                    ->columns(2)
                    ->schema([
                        Grid::make(4)
                            ->schema([
                                Select::make('county')
                                    ->options(County::class)
                                    ->searchable()
                                    ->required(),
                                TextInput::make('town')
                                    ->label('Town/City')
                                    ->maxLength(255),
                                TextInput::make('address')
                                    ->label('Physical Address')
                                    ->maxLength(255),
                                TextInput::make('street')
                                    ->label('Street/Road')
                                    ->maxLength(255),
                            ])
                        ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
                /* Textarea::make('description')
                    ->label('Description')
                    ->maxLength(65535)
                    ->columnSpanFull(), */
            ]);
    }
}
