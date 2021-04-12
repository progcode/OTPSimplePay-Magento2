OTP Simplepay Magento2
=========================

#### OTP Simple fizetési modul Magento2 webshop rendszerhez.

![](https://assets-github.s3.amazonaws.com/repo/progcode/img/simplepay_horizontal_02.png)

#### Licensz-el kapcsolatos megjegyzés
Amennyiben a modult a saját projektedben szeretnéd használni, továbbra is ingyenesen teheted meg, de megköszönjük, ha támogatod munkánkat
a modul megvásárlásával: https://shrt.hu/m2o a Patreonon: https://www.patreon.com/iconocoders

Amennyiben a modult nem a saját projektedben kívánod felhasználni, hanem tovább értékesíted egy partnered számára, egy egyszeri licensz díjat kell fizetned. 

Ehhez kérjük vedd fel velünk a kapcsolatot: https://shrt.hu/support vagy kérünk
vásárol meg a modult webshopunkból: https://shrt.hu/m2o

#### LICENSSZEL KAPCSOLATOS ÁLTALÁNOS INFORMÁCIÓK: https://iconocoders.com/license/

#### Fork-al kapcsolatos információk
A modul szabadon forkolható, azonban kérjük minden esetben jelezd felénk a forkolást a support@icoders.co email címen. A forkolt verzió kereskedelmi forgalomba NEM hozható, azt csak egyéni felhasználásra engedélyezzük!

A modul megvásárolható: https://shrt.hu/m2o

#### Fontos információk a terméktámogatással kapcsolatban
Amennyiben a modult nem saját webáruházadban / projektedben használod fel, hanem egy fizetős projektben szeretnéd felhasználni, kérjük a modul
letöltése előtt olvasd el a terméktámogatási feltételeinket: PRODUCT_SUPPORT.MD

Amennyiben a modult saját webáruházadban / projektedben használod fel, a terméktámogatást a Github repon keresztül érheted el. 
Ebben az esetben kérjünk nyiss egy új issue-t! 

-----------------

 - A felhasználó a webáruház pénztárában bankkártyás fizetési módot tud
   választani.
   
 - Az átirányított felületen, az OTP bakkártyás tranzakció oldalán
   fizetni tud bankkártyájával úgy, hogy biztonságos környezetben
   megadja a tranzakció kiegyenlítéséhez szükséges bankkártya adatokat.
   Sikeres fizetést követően a vásárló visszajut a webáruházba, a
   Magento pedig megkapja és eltárolja a tranzakciós adatokat.

 - Sikeres fizetés után a vásárló egy külön e-mail-ben megkapja az OTP
   fizetési azonosítót, illetve az a rendelés köszönő oldalon is
   megjelenítésre kerül.

 - A fizetéssel kapcsolatos tranzakciós adatok a webáruház
   adminisztrátora számára az admin felületen a rendelés megtekintésénél
   látszódnak.
   
 - A modul állítja a rendelés státuszát annak megfelelően, hogy a
   fizetés sikeres volt-e. 

----------
> **v.2.3.5:**
>
> - Meghallgattuk az igényeket, a modult ÚJRA ingyenesen elérhetővé tesszük a Githubob és több támogatási formát alakítunk ki. Ezzel egyidejűleg megváltozik a modul licenszelése is.
> 
> **v.2.3.3:**
>
>> - **Fontos:** A 2.3.3 verziótól kezdődően jogos érdekek miatt (a modul lincszek megszegése, hibakezelések biztosítása)
>   a modulban elhelyzésre került egy külső tracking script.
>   A tracking script által rögzített adatok: az adott weboldal hostname-je, a sikeres/sikertelen/timeout tranzakcióknál a tranzakció egyedi,
>   hashelt (sha256) azonosítója, timestamp-el mentve. A webshopot és a webshop felhasználót a script egy egyedi cookieId alapján azonosítja.
>   A script érzékeny felhasználói és egyéb azonosításra alkalmas
>   adatot nem gyűjt. További részletek elérhetőek a https://shrt.hu/pay2tracking címen.
>   A tracking script nem befolyásolja a webshop helyes működését, annak eltávolítása a jelen licensz
>   feltételek megszegését és a modul támogatásának elvesztését jelenti
> - Kártyatársasági logók cseréje (MasterCard, Maestro, VISA)
> - Composer verzió javítása, modul verzió javítása
> - COPYRIGHT blokkok frissítése

> **v.2.3.2:**
>
> - Fix virtual order

> **v.2.3.1:**
>
> - LOG_PATH Fix

> **v.2.3.0:**
> - **Fontos:** a 2.3.0 verziótól a 2.2.x és régebbi Magento verziók nem támogatottak!
> - Kijavít egy hibát, ami miatt a BACKREF Internal Error 500-as hibára futott amennyiben nem volt az url-ben `ctrl` vagy `RC` paraméter
> - Kijavít egy hibát, ami miatt a BACKREF Internal Error 500-as hibára futhatott mixelt protokoll miatt (http/https) -> mostantól csak a `https` protokoll támogatott
> - Kijavít egy hibát, ami miatt az IPN ellenőrzés Internal Error 500-as hibára futott, a válaszban pedig nem szerepelt az `EPAYMENT` tag
> - Megold egy problémát, ami miatt a `TIMEOUT/CANCELED ` fizetés Internal Error 500 hibára futott
> - Megold egy problémát, ami miatt a `BACKREF ` metódusban hibásan kerülhetett ellenőrzésre a sikertelen tranzakció állapota
> - Az OTP Simple megfelelőség miatt a modulbol eltávolításra került a checkout visszaállítás sikertelen vagy megszakított tranzakció esetén, ilyenkor a megrendelés minden esetben sikertelen lesz és a felhasználó a `checkout/onepage/failure` oldalra érkezik
> - Az OTP Simple megfelelőség miatt  szöveges módosítások történtek a rendelést visszaigazoló oldalon
> - Az OTP Simple megfelelőség miatt frissítésre kerültek a fizetési logo-k
> - Az OTP Simple által tesztelt, jóváhagyott verzió
> - COPYRIGHT blokkok frissítése

> **v.2.2.0:**
>
> - Fix MAGE2.3 support, update minimum php version

> **v.2.1.1.1:**
>
> - Támogatási információk (PRODUCT_SUPPORT.md - v1.0.0)

> **v.2.1.1:**
>
> - Amennyiben a fizetés megszakadt, vagy sikertelen lett, a kosár
eredeti tartalma visszaállításra kerül
> - Kijavít egy hibát, ami a beégetett http protokoll miatt egyes esetekben Internal Server Error
500-as hibát okozott a BACKREF metódusban, a fizetési oldalról visszatéréskor
> - Kijavít egy hibát, ami miatt ctrl hash kód és az URL-ből előállított hash kód nem egyezett meg
> - Kijavít egy hibát, ami miatt a szállítási / számlázási cím nem jelent meg a fizetési oldalon
> - Kijavít egy hibát, ami miatt a webshopban megadott kuponkód nem lett érvényes a fizetési oldalon
> - Alapértelmezett README: magyar
> - Copyright blokkok frissítése

> **v.2.1.0:**
>
> - A sikertelen vagy megszakított tranzakciók megfelelően visszairányítanak az időtúllépéses oldalra
> - Az admin beállítások között most már meg lehet adni instrukciókat, amelyek megjelennek a felhasználónak, amikor az kiválasztja ezt a fizetési módot. Ez egy jó hely az OTP által kötelezően előírt adattovábbítási nyilatkozat megjelentetéséhez.
> - A SimplePay SDK 1.0.7-es veriziója be lett építve ebbe a modulba. Nincs szükség az otp-simple-sdk külön telepítésére.
> - A modul frontend neve iconocoders_otpsimple-ről otpsimple-re változott, ami miatt szükség lehet a SimplePay admin oldalon az IPN cím frissítésére.
> - Javításra került egy hiba, amely miatt eddig a szállítási költség nettó összege lett átadva a SimplePay felületnek.
> - Javítva lett egy hiba, ami eddig átirányítási hibát okozott, ha a Magento egy alkönyvtárba volt telepítve.
> - A modul által megjelenített üzenetek át lettek írva, hogy összhangban legyenek az OTP jelenlegi követelményeivel.
> - Magento 2 kompatibilitás: 2.0.9 - 2.2.7

> **v.2.0.0:**
>
> - Publikus stabil verzió
> - Magento2 kompatibilitás: 2.0.9 - 2.2.1

> **Függőségek:**

> - Composer
> - Magento2 (2.0.9 - 2.2.1)

#### Telepítés

Ezt a csomagot be kell másolni a következő helyre:

```
'{magento_root}/app/code/Iconocoders/OtpSimple'
```

Vagy telepítsük Composerből:
```
composer require iconocoders/magento2-otp-simple-payment
```

Utána futtassa az alábbi parancsokat:
```
php bin/magento module:enable Iconocoders_OtpSimple
```
```
php bin/magento setup:upgrade
```
```
php bin/magento setup:static-content:deploy
```
```
php bin/magento setup:di:compile
```
```
php bin/magento cache:flush
```
----------

#### IPN Beállítás

Az IPN beállítását a Simple Pay adminisztrációs felületén kell beállítani. Az IPN üzenetek jeleznek a fizetés sikerességéről vagy sikertelenségéről, amit egy üzeneteket fogadó végpont kezel.

Az IPN végpont URL-ját kell beállítani a Simple Pay rendszerben, ami következő: {magento_domain}/otpsimple/payment/ipn/ (Pl.: https://example.com/otpsimple/payment/ipn/)

----------

Fejlesztés / Közreműködés
-------------------

Amennyiben fejlesztőként szeretnél csatlakozni a modul fejlesztéséhez, kérjük a develop branchet checkoutold ki, majd a fejlesztéseid visszavezetéséhez nyiss egy új pull-requestet!

Amennyiben hibát találtál, vagy fejlesztési ötleted/igényed van, kérjük jelezd ezt új Issue formájában!
