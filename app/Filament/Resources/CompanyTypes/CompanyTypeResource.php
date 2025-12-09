<?php

namespace App\Filament\Resources\CompanyTypes;

use App\Filament\Resources\CompanyTypes\Pages\CreateCompanyType;
use App\Filament\Resources\CompanyTypes\Pages\EditCompanyType;
use App\Filament\Resources\CompanyTypes\Pages\ListCompanyTypes;
use App\Filament\Resources\CompanyTypes\Schemas\CompanyTypeForm;
use App\Filament\Resources\CompanyTypes\Tables\CompanyTypesTable;
use App\Models\CompanyType;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanyTypeResource extends Resource
{
    protected static ?string $model = CompanyType::class;

    protected static string | UnitEnum | null $navigationGroup = 'Companies Management';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CompanyTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanyTypesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCompanyTypes::route('/'),
            'create' => CreateCompanyType::route('/create'),
            'edit' => EditCompanyType::route('/{record}/edit'),
        ];
    }
}
