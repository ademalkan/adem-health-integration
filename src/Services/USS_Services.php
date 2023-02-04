<?php

namespace Adema\AdemHealthIntegration\Providers\Services;

use Illuminate\Support\Facades\Http;
use http\Exception;

class USS_Services
{



    /**
     * This Function will get USS authentication information and edit http header part for us
     * @param array $authentication_data["KullaniciAdi","Sifre","UygulamaKodu"]
     * @return object
     */
    static function Authentication(array $authentication_data): object
    {
        try {
            return  Http::withHeaders($authentication_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS ASOS Service
     * This Function will run the HbysDoktorBilgiGonder  function for us and return the result
     * @param array $uss_data["HekimTckn","HastaneKodu","HastaneReferansNumarasi"]
     * @return object
     */
    static function HbysDoktorBilgiGonder(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->post('https://ussservis.saglik.gov.tr/api/Asos/HbysDoktorBilgiGonder', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Asi Service
     * This Function will run the GetKisiyeAitAsiTakvimi   function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiyeAitAsiTakvimi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/asi/GetKisiyeAitAsiTakvimi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Asi Service
     * This Function will run the GetKisiyeAitAsiListesi function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiyeAitAsiListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/asi/GetKisiyeAitAsiListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Asi Service
     * This Function will run the GetKisiyeAitAsiErtelemeListesi  function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiyeAitAsiErtelemeListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/asi/GetKisiyeAitAsiErtelemeListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Asi Service
     * This Function will run the GetBirimeAitAsiErtelemeListesi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitAsiErtelemeListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/asi/GetBirimeAitAsiErtelemeListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Bebek/Çocuk İzlem  Service
     * This Function will run the GetBirimeAitBebekCocukIzlemListesi  function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitBebekCocukIzlemListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/bebekcocukizlem/GetBirimeAitBebekCocukIzlemListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Bebek/Çocuk İzlem  Service
     * This Function will run the GetKisiyeAitBebekCocukIzlemListesi   function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiyeAitBebekCocukIzlemListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/bebekcocukizlem/GetKisiyeAitBebekCocukIzlemListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Gebelik   Service
     * This Function will run the GetBirimeAitGebelikBildirimListesi    function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitGebelikBildirimListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/gebelik/GetBirimeAitGebelikBildirimListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Gebelik   Service
     * This Function will run the GetBirimeAitGebelikIzlemListesi     function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitGebelikIzlemListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/gebelik/GetBirimeAitGebelikIzlemListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Gebelik   Service
     * This Function will run the GetBirimeAitGebelikSonucListesi     function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitGebelikSonucListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/gebelik/GetBirimeAitGebelikSonucListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Gebelik   Service
     * This Function will run the GetKisiyeAitGebelikBildirimListesi     function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiyeAitGebelikBildirimListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/gebelik/GetKisiyeAitGebelikBildirimListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Gebelik   Service
     * This Function will run the GetKisiyeAitGebelikIzlemListesi     function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiyeAitGebelikIzlemListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/gebelik/GetKisiyeAitGebelikIzlemListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Gebelik   Service
     * This Function will run the GetKisiyeAitGebelikSonucListesi     function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiyeAitGebelikSonucListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/gebelik/GetKisiyeAitGebelikSonucListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitHastaListesi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitHastaSayfaListesi function for us and return the result
     * @param array $uss_data["birimId","sayfaNo","sayfaBoyu"]
     * @return object
     */
    static function GetBirimeAitHastaSayfaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitHastaSayfaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitGeziciHastaListesi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitGeziciHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitGeziciHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitYabanciHastaListesi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitYabanciHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitYabanciHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitYenidoganHastaListesi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitYenidoganHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitYenidoganHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitHukumluHastaBilgisi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitHukumluHastaBilgisi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitHukumluHastaBilgisi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeYeniEklenenHastaListesi function for us and return the result
     * @param array $uss_data["birimId","baslangicTarihi","bitisTarihi"]
     * @return object
     */
    static function GetBirimeYeniEklenenHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeYeniEklenenHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimHastaHareketleriBilgisi function for us and return the result
     * @param array $uss_data["birimId","baslangicTarihi","bitisTarihi"]
     * @return object
     */
    static function GetBirimHastaHareketleriBilgisi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimHastaHareketleriBilgisi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitGebeHastaListesi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitGebeHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitLohusaHastaListesi function for us and return the result
     * @param array $uss_data["birimId"]
     * @return object
     */
    static function GetBirimeAitLohusaHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitLohusaHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitSonYeniEklenenHastaListesi function for us and return the result
     * @param array $uss_data["birimId","gun"]
     * @return object
     */
    static function GetBirimeAitSonYeniEklenenHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitSonYeniEklenenHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitSonIlisigiKesilenHastaListesi function for us and return the result
     * @param array $uss_data["birimId","gun"]
     * @return object
     */
    static function GetBirimeAitSonIlisigiKesilenHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitSonIlisigiKesilenHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitSonOlenHastaListesi function for us and return the result
     * @param array $uss_data["birimId","gun"]
     * @return object
     */
    static function GetBirimeAitSonOlenHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitSonOlenHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetBirimeAitSonYurtdisiHastaListesi function for us and return the result
     * @param array $uss_data["birimId","gun"]
     * @return object
     */
    static function GetBirimeAitSonYurtdisiHastaListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetBirimeAitSonYurtdisiHastaListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHastaHekimBirimBilgisi function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetHastaHekimBirimBilgisi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/GetHastaHekimBirimBilgisi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the TakipNoListeleme function for us and return the result
     * @param array $uss_data["healthcareProvider","tarih"]
     * @return object
     */
    static function TakipNoListeleme(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/kurum/TakipNoListelemei', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the HemoglobinopatiBilgileriSorgula function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function HemoglobinopatiBilgileriSorgula(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/HemoglobinopatiBilgileriSorgula', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the NtpBilgileriSorgulaAhbs function for us and return the result
     * @param array $uss_data["sysTakipNo","gunSayisi"]
     * @return object
     */
    static function NtpBilgileriSorgulaAhbs(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/NtpBilgileriSorgulaAhbs', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the NtpBilgileriSorgulaHbys function for us and return the result
     * @param array $uss_data["anneKimlikNumrasi"]
     * @return object
     */
    static function NtpBilgileriSorgulaHbys(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/NtpBilgileriSorgulaHbys', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetReceteBilgileri function for us and return the result
     * @param array $uss_data["sysTakipNo","hizmetSunucu"]
     * @return object
     */
    static function GetReceteBilgileri(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/RenkliRecete/GetReceteBilgileri', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetReceteBilgileriTarih function for us and return the result
     * @param array $uss_data["tarih","hizmetSunucu","sayfa"]
     * @return object
     */
    static function GetReceteBilgileriTarih(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/RenkliRecete/GetReceteBilgileriTarih', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetAhbKronik function for us and return the result
     * @param array $uss_data
     * @return object
     */
    static function GetAhbKronik(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/GetAhbKronik');
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the YatanHastaCikisKontrol function for us and return the result
     * @param array $uss_data
     * @return object
     */
    static function YatanHastaCikisKontrol(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/YatanHastaCikisKontrol');
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the SGKHizmetSorgulama function for us and return the result
     * @param array $uss_data["sysTakipNo","islemReferansNumarasi"]
     * @return object
     */
    static function SGKHizmetSorgulama(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/SGKHizmetSorgulama', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the SGKHizmetSorgulamaBySGKTakipNo function for us and return the result
     * @param array $uss_data["SGKTakipNo","SGKHizmetReferansNo"]
     * @return object
     */
    static function SGKHizmetSorgulamaBySGKTakipNo(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/SGKHizmetSorgulamaBySGKTakipNo', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the SGKHizmetSonucKontrol function for us and return the result
     * @param array $uss_data["healthcareProvider","tarih"]
     * @return object
     */
    static function SGKHizmetSonucKontrol(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/SGKHizmetSonucKontrol', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetReceteBilgisiByTckimlikNoReceteNo function for us and return the result
     * @param array $uss_data["TckimlikNo","ReceteNo"]
     * @return object
     */
    static function GetReceteBilgisiByTckimlikNoReceteNo(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/Genel/GetReceteBilgisiByTckimlikNoReceteNo', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the KontroleTabiiIlacSorgulama function for us and return the result
     * @param array $uss_data["hekimTC","hastaTC"]
     * @return object
     */
    static function KontroleTabiiIlacSorgulama(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/KontroleTabiiIlacSorgulama', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the TekerlekliSandalyeBilgisiGetir function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function TekerlekliSandalyeBilgisiGetir(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/genel/TekerlekliSandalyeBilgisiGetir', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the TekerlekliSandalyeBilgisiGonder function for us and return the result
     * @param array $uss_data["TcKimlikNo","IhtiyacTipi","IhtiyacSuresi (Opsiyonel)"]
     * @return object
     */
    static function TekerlekliSandalyeBilgisiGonder(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->post('https://ussservis.saglik.gov.tr/api/genel/TekerlekliSandalyeBilgisiGonder', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHastaneHataBildirimi function for us and return the result
     * @param array $uss_data["hastaneKodu","baslangicTarih","bitisTarih"]
     * @return object
     */
    static function GetHastaneHataBildirimi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/Kurum/GetHastaneHataBildirimi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHastaIletisimBilgileri function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetHastaIletisimBilgileri(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetHastaIletisimBilgileri', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the Get1549KadinIzlemListesi function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function Get1549KadinIzlemListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/Get1549KadinIzlemListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHastaNakilDurumu function for us and return the result
     * @param array $uss_data["SYSTakipNo"]
     * @return object
     */
    static function GetHastaNakilDurumu(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/hasta/GetHastaNakilDurumu', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the SifreGuncelleme function for us and return the result
     * @param array $uss_data["eskiSifre","yeniSifre"]
     * @return object
     */
    static function SifreGuncelleme(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->post('https://ussservis.saglik.gov.tr/api/genel/SifreGuncelleme', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GunSonuListeleme function for us and return the result
     * @param array $uss_data["healthcareProvider(Kurum Kodu)","tanimKodu","tarih"]
     * @return object
     */
    static function GunSonuListeleme(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/kurum/GunSonuListeleme', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetDiabetTaramaPozitifPerformans function for us and return the result
     * @param array $uss_data[" birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetDiabetTaramaPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetDiabetTaramaPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHipertansiyonTaramaPozitifPerformans function for us and return the result
     * @param array $uss_data[" birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetHipertansiyonTaramaPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetHipertansiyonTaramaPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetKardiyovaskülerTaramaPozitifPerformans function for us and return the result
     * @param array $uss_data[" birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetKardiyovaskülerTaramaPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetKardiyovaskülerTaramaPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetKolonKanseriTaramaPozitifPerformans function for us and return the result
     * @param array $uss_data[" birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetKolonKanseriTaramaPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetKolonKanseriTaramaPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetMemeKanseriTaramaPozitifPerformans function for us and return the result
     * @param array $uss_data[" birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetMemeKanseriTaramaPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetMemeKanseriTaramaPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetObeziteTaramaPozitifPerformans function for us and return the result
     * @param array $uss_data[" birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetObeziteTaramaPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetObeziteTaramaPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetServiksKanseriTaramaPozitifPerformans function for us and return the result
     * @param array $uss_data[" birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetServiksKanseriTaramaPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetServiksKanseriTaramaPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHastalikBilgileriPozitifPerformans function for us and return the result
     * @param array $uss_data["tcKimlikNo(Tc Kimlik no)"]
     * @return object
     */
    static function GetHastalikBilgileriPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetHastalikBilgileriPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHastalikBilgileriListesiPozitifPerformans function for us and return the result
     * @param array $uss_data["birimId(Kurum Kodu)"]
     * @return object
     */
    static function GetHastalikBilgileriListesiPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetHastalikBilgileriPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the GetHastalikBilgileriSayfaListesiPozitifPerformans function for us and return the result
     * @param array $uss_data["birimId(Kurum Kodu)","sayfaNo","sayfaBoyu"]
     * @return object
     */
    static function GetHastalikBilgileriSayfaListesiPozitifPerformans(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/tarama/GetHastalikBilgileriSayfaListesiPozitifPerformans', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Service
     * This Function will run the KanserDenetimKontrol function for us and return the result
     * @param array $uss_data["birinId"]
     * @return object
     */
    static function KanserDenetimKontrol(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/HalkSagligi/KanserDenetimKontrol', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Enabız Doktor Erişim Service
     * This Function will run the GetToken function for us and return the result
     * @param array $uss_data["HastaTc","HekimTc","SYSTakipNo","HastaneRefNo","KlinikKodu"]
     * @return object
     */
    static function GetToken(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EnabizDoktorErisim/GetToken', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Enabız Doktor Erişim Service
     * This Function will run the GetTokenBySysTakipNoSutKodu function for us and return the result
     * @param array $uss_data["HastaTc","HekimTc","SYSTakipNo","SutKodu"]
     * @return object
     */
    static function GetTokenBySysTakipNoSutKodu(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EnabizDoktorErisim/GetTokenBySysTakipNoSutKodu', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Enabız Doktor Erişim Service
     * This Function will run the GetTokenOzelIzin function for us and return the result
     * @param array $uss_data["ErisenTc","ErisilenTc"]
     * @return object
     */
    static function GetTokenOzelIzin(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EnabizDoktorErisim/GetTokenOzelIzin', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Hasta Kan Yönetimi Service
     * This Function will run the GetHastaKanYonetimAdres function for us and return the result
     * @param array $uss_data["TcKimlikNo"]
     * @return object
     */
    static function GetHastaKanYonetimAdres(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/HKYS/GetHastaKanYonetimAdres', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Cihaz Üreticileri  Service
     * This Function will run the AddSensorData function for us and return the result
     * @param array $uss_data["TCKN","Bilgiler","SensorTipi","Deger","Tarih","CihazTipi"]
     * @return object
     */
    static function AddSensorData(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->post('https://ussservis.saglik.gov.tr/api/Cihaz/AddSensorData', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Cihaz Üreticileri  Service
     * This Function will run the AddSensorPdf function for us and return the result
     * @param array $uss_data["TcKimlikNo","CihazKod","FileBase64","FileName"]
     * @return object
     */
    static function AddSensorPdf(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->post('https://ussservis.saglik.gov.tr/api/Cihaz/AddSensorPdf', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Işlem Bana Ait Değil Service
     * This Function will run the IslemBanaAitDegilListele function for us and return the result
     * @param array $uss_data["baslangicAraligi","bitisAraligi"]
     * @return object
     */
    static function IslemBanaAitDegilListele(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/kurum/IslemBanaAitDegilListele', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Işlem Bana Ait Değil Service
     * This Function will run the AdSoyadGizlilikDurumu function for us and return the result
     * @param array $uss_data["hastaTc","systakipNo","hastaReferansNo"]
     * @return object
     */
    static function AdSoyadGizlilikDurumu(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/enabiz/AdSoyadGizlilikDurumu', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Işlem Bana Ait Değil Service
     * This Function will run the TetkikMukerrerSorgulama function for us and return the result
     * @param array $uss_data["KlinikKodu","HastaKimlikBilgisi","HekimKimlikBilgisi","SutKodu"]
     * @return object
     */
    static function TetkikMukerrerSorgulama(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->post('https://ussservis.saglik.gov.tr/api/TetkikSonuc/TetkikMukerrerSorgulama', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Özellikli İzlem Service
     * This Function will run the GetOzellikliIzlemListesi function for us and return the result
     * @param array $uss_data["KurumKodu"]
     * @return object
     */
    static function GetOzellikliIzlemListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/OzellikliIzlem/GetOzellikliIzlemListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Özellikli İzlem Service
     * This Function will run the GetHastaTemasDurumu function for us and return the result
     * @param array $uss_data["TcKimlikNo","HekimKimlikNo"]
     * @return object
     */
    static function GetHastaTemasDurumu(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/OzellikliIzlem/GetHastaTemasDurumu', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Özellikli İzlem Service
     * This Function will run the GetOzellikliIzlemBilgisiListesi function for us and return the result
     * @param array $uss_data["KurumKodu","tarih"]
     * @return object
     */
    static function GetOzellikliIzlemBilgisiListesi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/OzellikliIzlem/GetOzellikliIzlemBilgisiListesi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Aşı Takvimim Service
     * This Function will run the BilgiGetir function for us and return the result
     * @param array $uss_data["tckno"]
     * @return object
     */
    static function BilgiGetir(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EDevlet/BilgiGetir', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Aşı Takvimim Service
     * This Function will run the BarkodluBelgeOlustur function for us and return the result
     * @param array $uss_data["cocukTckno","ebeveynTckno"]
     * @return object
     */
    static function BarkodluBelgeOlustur(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EDevlet/BarkodluBelgeOlustur', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Aşı Takvimim Service
     * This Function will run the KayitliBelgeListesiGetir function for us and return the result
     * @param array $uss_data["tckno"]
     * @return object
     */
    static function KayitliBelgeListesiGetir(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EDevlet/KayitliBelgeListesiGetir', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Aşı Takvimim Service
     * This Function will run the BelgeDogrula function for us and return the result
     * @param array $uss_data["tckno","barcode"]
     * @return object
     */
    static function BelgeDogrula(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EDevlet/BelgeDogrula', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Aşı Takvimim Service
     * This Function will run the KayitliBelgeGetir function for us and return the result
     * @param array $uss_data["barcode"]
     * @return object
     */
    static function KayitliBelgeGetir(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EDevlet/KayitliBelgeGetir', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Aşı Takvimim Service
     * This Function will run the AsiTakvimBilgisiGetir function for us and return the result
     * @param array $uss_data["tckno"]
     * @return object
     */
    static function AsiTakvimBilgisiGetir(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EDevlet/AsiTakvimBilgisiGetir', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetKisiTemelBilgileri function for us and return the result
     * @param array $uss_data["tcKimlikNo"]
     * @return object
     */
    static function GetKisiTemelBilgileri(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/NeyimVar/GetKisiTemelBilgileri', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetKurumInfluenzaBilgisi function for us and return the result
     * @param array $uss_data["KurumKodu"]
     * @return object
     */
    static function GetKurumInfluenzaBilgisi(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/EnabizInfluenza/GetKurumInfluenzaBilgisi', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetKdsKronik function for us and return the result
     * @param array $uss_data["tckimlikno"]
     * @return object
     */
    static function GetKdsKronik(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/CovidAsi/GetKdsKronik', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetKurumCovidAsiHicYaptirmayan function for us and return the result
     * @param array $uss_data["KurumKodu"]
     * @return object
     */
    static function GetKurumCovidAsiHicYaptirmayan(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/CovidAsi/GetKurumCovidAsiHicYaptirmayan', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetKurumCovidAsi2DozYaptirmayan function for us and return the result
     * @param array $uss_data["KurumKodu"]
     * @return object
     */
    static function GetKurumCovidAsi2DozYaptirmayan(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/CovidAsi/GetKurumCovidAsi2DozYaptirmayan', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetAsiKartiPdf function for us and return the result
     * @param array $uss_data["TcKimlikNo","PasaportNo","Uyruk","AsiTipi"]
     * @return object
     */
    static function GetAsiKartiPdf(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/CovidAsi/GetAsiKartiPdf', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetAkilciIstemTahlilList function for us and return the result
     * @param array $uss_data["HastaTcKimlikNo","HekimTcKimlikNo","SutKodu"]
     * @return object
     */
    static function GetAkilciIstemTahlilList(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/AkilciTestIstem/GetAkilciIstemTahlilList', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the AddAkilciIstemIslemSonuc function for us and return the result
     * @param array $uss_data["HastaTcKimlikNo","HekimTcKimlikNo","Gerekce","SutKodu"]
     * @return object
     */
    static function AddAkilciIstemIslemSonuc(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->post('https://ussservis.saglik.gov.tr/api/AkilciTestIstem/AddAkilciIstemIslemSonuc', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the OkuSmaTahlilIstem function for us and return the result
     * @param array $uss_data["barkod","tcKimlikNo"]
     * @return object
     */
    static function OkuSmaTahlilIstem(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/melis/OkuSmaTahlilIstem', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetirBirimSmaTahlilIstem function for us and return the result
     * @param array $uss_data
     * @return object
     */
    static function GetirBirimSmaTahlilIstem(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/melis/GetirBirimSmaTahlilIstem', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetirAdaySmaTahlilIstem function for us and return the result
     * @param array $uss_data
     * @return object
     */
    static function GetirAdaySmaTahlilIstem(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/melis/GetirAdaySmaTahlilIstem', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetKuduzRiskTemas function for us and return the result
     * @param array $uss_data["TcKimlikNo"]
     * @return object
     */
    static function GetKuduzRiskTemas(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/Hasta/GetKuduzRiskTemas', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
    /**
     * USS Covid19 Risk Değerlendirme Service
     * This Function will run the GetHastaBildirim function for us and return the result
     * @param array $uss_data["hekimKimlikNo","hastaKimlikNo","klinikKodu"]
     * @return object
     */
    static function GetHastaBildirim(array $uss_data): object
    {
        try {
            return self::Authentication($uss_data)->get('https://ussservis.saglik.gov.tr/api/ENabizBildirim/GetHastaBildirim', $uss_data);
        } catch (\Exception $exception) {
            throw  new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
}
