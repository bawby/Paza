<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum County: string implements HasLabel
{
    case BARINGO = 'baringo';
    case BOMET = 'bomet';
    case BUNGOMA = 'bungoma';
    case BUSIA = 'busia';
    case ELGEYO_MARAKWET = 'elgeyo-marakwet';
    case EMBU = 'embu';
    case GARISSA = 'garissa';
    case HOMA_BAY = 'homa bay';
    case ISIOLO = 'isiolo';
    case KAJIADO = 'kajiado';
    case KAKAMEGA = 'kakamega';
    case KERICHO = 'kericho';
    case KIAMBU = 'kiambu';
    case KILIFI = 'kilifi';
    case KIRINYAGA = 'kirinyaga';
    case KISII = 'kisii';
    case KISUMU = 'kisumu';
    case KITUI = 'kitui';
    case KWALE = 'kwale';
    case LAIKIPIA = 'laikipia';
    case LAMU = 'lamu';
    case MACHAKOS = 'machakos';
    case MAKUENI = 'makueni';
    case MANDERA = 'mandera';
    case MARSABIT = 'marsabit';
    case MERU = 'meru';
    case MIGORI = 'migori';
    case MOMBASA = 'mombasa';
    case MURANGA = "murang'a";
    case NAIROBI = 'nairobi';
    case NAKURU = 'nakuru';
    case NANDI = 'nandi';
    case NAROK = 'narok';
    case NYAMIRA = 'nyamira';
    case NYANDARUA = 'nyandarua';
    case NYERI = 'nyeri';
    case SAMBURU = 'samburu';
    case SIAYA = 'siaya';
    case TAITA_TAVETA = 'taita-taveta';
    case TANA_RIVER = 'tana river';
    case THARAKA_NITHI = 'tharaka-nithi';
    case TRANS_NZOIA = 'trans nzoia';
    case TURKANA = 'turkana';
    case UASIN_GISHU = 'uasin gishu';
    case VIHIGA = 'vihiga';
    case WAJIR = 'wajir';
    case WEST_POKOT = 'west pokot';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::BARINGO => 'Baringo',
            self::BOMET => 'Bomet',
            self::BUNGOMA => 'Bungoma',
            self::BUSIA => 'Busia',
            self::ELGEYO_MARAKWET => 'Elgeyo-Marakwet',
            self::EMBU => 'Embu',
            self::GARISSA => 'Garissa',
            self::HOMA_BAY => 'Homa Bay',
            self::ISIOLO => 'Isiolo',
            self::KAJIADO => 'Kajiado',
            self::KAKAMEGA => 'Kakamega',
            self::KERICHO => 'Kericho',
            self::KIAMBU => 'Kiambu',
            self::KILIFI => 'Kilifi',
            self::KIRINYAGA => 'Kirinyaga',
            self::KISII => 'Kisii',
            self::KISUMU => 'Kisumu',
            self::KITUI => 'Kitui',
            self::KWALE => 'Kwale',
            self::LAIKIPIA => 'Laikipia',
            self::LAMU => 'Lamu',
            self::MACHAKOS => 'Machakos',
            self::MAKUENI => 'Makueni',
            self::MANDERA => 'Mandera',
            self::MARSABIT => 'Marsabit',
            self::MERU => 'Meru',
            self::MIGORI => 'Migori',
            self::MOMBASA => 'Mombasa',
            self::MURANGA => "Murang'a",
            self::NAIROBI => 'Nairobi',
            self::NAKURU => 'Nakuru',
            self::NANDI => 'Nandi',
            self::NAROK => 'Narok',
            self::NYAMIRA => 'Nyamira',
            self::NYANDARUA => 'Nyandarua',
            self::NYERI => 'Nyeri',
            self::SAMBURU => 'Samburu',
            self::SIAYA => 'Siaya',
            self::TAITA_TAVETA => 'Taita-Taveta',
            self::TANA_RIVER => 'Tana River',
            self::THARAKA_NITHI => 'Tharaka-Nithi',
            self::TRANS_NZOIA => 'Trans Nzoia',
            self::TURKANA => 'Turkana',
            self::UASIN_GISHU => 'Uasin Gishu',
            self::VIHIGA => 'Vihiga',
            self::WAJIR => 'Wajir',
            self::WEST_POKOT => 'West Pokot',
        };

    }
}
