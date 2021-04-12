<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Proje Hakkında

Bu proje Enuygun task case çalışması için yapılmıştır. Projede birden fazla provider desteklenmesi ve design pattern kullanımı beklenmektedir.

## Kod Hakkında

Proje command, job(on queue), service pattern(factory, adapter) kullanılarak yaklaşık olarak 3 saat içerisinde geliştirilmiştir. 
Developerlara saat bazlı bir atama yapılmamış gerektiği taktirde farklı bir geliştirme olarak geliştirilebileceği düşünülmüştür.

Command(App > Commands) -> Her saat başı sistemde tanımlı olan providerlardaki tasklar alınıp sisteme kaydedilmektedir. 
Akabinde istenildiği an da tetiklenecek şekilde taskları developerlara atama işlemi yapan bir job tasarlanmıştır.

Tetiklenmesi için terminalden yazılması gereken komut: 

```
php artisan todo:check
```

Job(App > Jobs) -> Sisteme kayıt edilmiş ve hala ataması yapılmamış taskların atamasını kuyrukta yapan bir geliştirmedir. 
Bu alan ihtiyaca yönelik olarak geliştirilebilir. Şimdilik saat-developer bazlı olarak işlem yapılmaktadır.

Service(App > Services) -> Tüm entegrasyonlar için bir sistem geliştirilmiş olup sadece TODO entegrastonu adapte edilmiştir.
Daha sonra Fuel, Otel, Uçak vs vs gibi tüm entegrasyonlar bu alanda çok rahat bir şekilde geliştirile bilecektir.

Config(config > todos) -> Sistemdeki todo entegrasyon bilgilerinin bulunduğu dosyadır.

## Uç Nokta
Request:
GET {HOST}/api/developer 

Response:
```
{
  "data": [
    {
      "id": 1,
      "name": "Developer1",
      "level": 1,
      "total_assign_hour": 189,
      "total_week": "4.20",
      "todos": [
        {
          "id": 1,
          "name": "IT Task 0",
          "estimated_duration": 18
        },
        {
          "id": 18,
          "name": "IT Task 17",
          "estimated_duration": 33
        },
        {
          "id": 43,
          "name": "IT Task 42",
          "estimated_duration": 50
        },
        {
          "id": 76,
          "name": "Business Task 8",
          "estimated_duration": 48
        },
        {
          "id": 112,
          "name": "Business Task 44",
          "estimated_duration": 40
        }
      ]
    },
    {
      "id": 2,
      "name": "Developer2",
      "level": 2,
      "total_assign_hour": 187.5,
      "total_week": "4.17",
      "todos": [
        {
          "id": 3,
          "name": "IT Task 2",
          "estimated_duration": 30
        },
        {
          "id": 15,
          "name": "IT Task 14",
          "estimated_duration": 11
        },
        {
          "id": 20,
          "name": "IT Task 19",
          "estimated_duration": 24
        },
        {
          "id": 29,
          "name": "IT Task 28",
          "estimated_duration": 4
        },
        {
          "id": 30,
          "name": "IT Task 29",
          "estimated_duration": 20
        },
        {
          "id": 37,
          "name": "IT Task 36",
          "estimated_duration": 10
        },
        {
          "id": 42,
          "name": "IT Task 41",
          "estimated_duration": 24
        },
        {
          "id": 47,
          "name": "IT Task 46",
          "estimated_duration": 9
        },
        {
          "id": 49,
          "name": "IT Task 48",
          "estimated_duration": 12
        },
        {
          "id": 56,
          "name": "IT Task 55",
          "estimated_duration": 48
        },
        {
          "id": 72,
          "name": "Business Task 4",
          "estimated_duration": 14
        },
        {
          "id": 78,
          "name": "Business Task 10",
          "estimated_duration": 14
        },
        {
          "id": 84,
          "name": "Business Task 16",
          "estimated_duration": 27
        },
        {
          "id": 94,
          "name": "Business Task 26",
          "estimated_duration": 24
        },
        {
          "id": 100,
          "name": "Business Task 32",
          "estimated_duration": 28
        },
        {
          "id": 113,
          "name": "Business Task 45",
          "estimated_duration": 40
        },
        {
          "id": 124,
          "name": "Business Task 56",
          "estimated_duration": 36
        }
      ]
    },
    {
      "id": 3,
      "name": "Developer3",
      "level": 3,
      "total_assign_hour": 191.65,
      "total_week": "4.26",
      "todos": [
        {
          "id": 4,
          "name": "IT Task 3",
          "estimated_duration": 16
        },
        {
          "id": 8,
          "name": "IT Task 7",
          "estimated_duration": 30
        },
        {
          "id": 16,
          "name": "IT Task 15",
          "estimated_duration": 24
        },
        {
          "id": 22,
          "name": "IT Task 21",
          "estimated_duration": 5
        },
        {
          "id": 24,
          "name": "IT Task 23",
          "estimated_duration": 14
        },
        {
          "id": 26,
          "name": "IT Task 25",
          "estimated_duration": 27
        },
        {
          "id": 33,
          "name": "IT Task 32",
          "estimated_duration": 10
        },
        {
          "id": 36,
          "name": "IT Task 35",
          "estimated_duration": 10
        },
        {
          "id": 38,
          "name": "IT Task 37",
          "estimated_duration": 10
        },
        {
          "id": 41,
          "name": "IT Task 40",
          "estimated_duration": 12
        },
        {
          "id": 44,
          "name": "IT Task 43",
          "estimated_duration": 30
        },
        {
          "id": 48,
          "name": "IT Task 47",
          "estimated_duration": 16
        },
        {
          "id": 51,
          "name": "IT Task 50",
          "estimated_duration": 4
        },
        {
          "id": 53,
          "name": "IT Task 52",
          "estimated_duration": 32
        },
        {
          "id": 59,
          "name": "IT Task 58",
          "estimated_duration": 7
        },
        {
          "id": 61,
          "name": "IT Task 60",
          "estimated_duration": 12
        },
        {
          "id": 67,
          "name": "IT Task 66",
          "estimated_duration": 30
        },
        {
          "id": 74,
          "name": "Business Task 6",
          "estimated_duration": 20
        },
        {
          "id": 77,
          "name": "Business Task 9",
          "estimated_duration": 4
        },
        {
          "id": 80,
          "name": "Business Task 12",
          "estimated_duration": 30
        },
        {
          "id": 88,
          "name": "Business Task 20",
          "estimated_duration": 20
        },
        {
          "id": 93,
          "name": "Business Task 25",
          "estimated_duration": 27
        },
        {
          "id": 96,
          "name": "Business Task 28",
          "estimated_duration": 7
        },
        {
          "id": 97,
          "name": "Business Task 29",
          "estimated_duration": 16
        },
        {
          "id": 103,
          "name": "Business Task 35",
          "estimated_duration": 9
        },
        {
          "id": 104,
          "name": "Business Task 36",
          "estimated_duration": 15
        },
        {
          "id": 108,
          "name": "Business Task 40",
          "estimated_duration": 6
        },
        {
          "id": 111,
          "name": "Business Task 43",
          "estimated_duration": 9
        },
        {
          "id": 114,
          "name": "Business Task 46",
          "estimated_duration": 9
        },
        {
          "id": 116,
          "name": "Business Task 48",
          "estimated_duration": 3
        },
        {
          "id": 118,
          "name": "Business Task 50",
          "estimated_duration": 60
        },
        {
          "id": 129,
          "name": "Business Task 61",
          "estimated_duration": 24
        },
        {
          "id": 133,
          "name": "Business Task 65",
          "estimated_duration": 27
        }
      ]
    },
    {
      "id": 4,
      "name": "Developer4",
      "level": 4,
      "total_assign_hour": 187.25,
      "total_week": "4.16",
      "todos": [
        {
          "id": 5,
          "name": "IT Task 4",
          "estimated_duration": 15
        },
        {
          "id": 6,
          "name": "IT Task 5",
          "estimated_duration": 12
        },
        {
          "id": 10,
          "name": "IT Task 9",
          "estimated_duration": 6
        },
        {
          "id": 11,
          "name": "IT Task 10",
          "estimated_duration": 20
        },
        {
          "id": 14,
          "name": "IT Task 13",
          "estimated_duration": 15
        },
        {
          "id": 17,
          "name": "IT Task 16",
          "estimated_duration": 20
        },
        {
          "id": 21,
          "name": "IT Task 20",
          "estimated_duration": 33
        },
        {
          "id": 27,
          "name": "IT Task 26",
          "estimated_duration": 24
        },
        {
          "id": 31,
          "name": "IT Task 30",
          "estimated_duration": 45
        },
        {
          "id": 40,
          "name": "IT Task 39",
          "estimated_duration": 48
        },
        {
          "id": 46,
          "name": "IT Task 45",
          "estimated_duration": 45
        },
        {
          "id": 55,
          "name": "IT Task 54",
          "estimated_duration": 40
        },
        {
          "id": 60,
          "name": "IT Task 59",
          "estimated_duration": 8
        },
        {
          "id": 62,
          "name": "IT Task 61",
          "estimated_duration": 3
        },
        {
          "id": 64,
          "name": "IT Task 63",
          "estimated_duration": 9
        },
        {
          "id": 66,
          "name": "IT Task 65",
          "estimated_duration": 22
        },
        {
          "id": 68,
          "name": "Business Task 0",
          "estimated_duration": 7
        },
        {
          "id": 69,
          "name": "Business Task 1",
          "estimated_duration": 12
        },
        {
          "id": 73,
          "name": "Business Task 5",
          "estimated_duration": 35
        },
        {
          "id": 81,
          "name": "Business Task 13",
          "estimated_duration": 3
        },
        {
          "id": 82,
          "name": "Business Task 14",
          "estimated_duration": 20
        },
        {
          "id": 86,
          "name": "Business Task 18",
          "estimated_duration": 7
        },
        {
          "id": 87,
          "name": "Business Task 19",
          "estimated_duration": 16
        },
        {
          "id": 89,
          "name": "Business Task 21",
          "estimated_duration": 16
        },
        {
          "id": 92,
          "name": "Business Task 24",
          "estimated_duration": 60
        },
        {
          "id": 99,
          "name": "Business Task 31",
          "estimated_duration": 7
        },
        {
          "id": 101,
          "name": "Business Task 33",
          "estimated_duration": 27
        },
        {
          "id": 106,
          "name": "Business Task 38",
          "estimated_duration": 9
        },
        {
          "id": 109,
          "name": "Business Task 41",
          "estimated_duration": 5
        },
        {
          "id": 110,
          "name": "Business Task 42",
          "estimated_duration": 45
        },
        {
          "id": 119,
          "name": "Business Task 51",
          "estimated_duration": 11
        },
        {
          "id": 121,
          "name": "Business Task 53",
          "estimated_duration": 3
        },
        {
          "id": 122,
          "name": "Business Task 54",
          "estimated_duration": 40
        },
        {
          "id": 126,
          "name": "Business Task 58",
          "estimated_duration": 8
        },
        {
          "id": 128,
          "name": "Business Task 60",
          "estimated_duration": 20
        },
        {
          "id": 130,
          "name": "Business Task 62",
          "estimated_duration": 10
        },
        {
          "id": 132,
          "name": "Business Task 64",
          "estimated_duration": 20
        },
        {
          "id": 134,
          "name": "Business Task 66",
          "estimated_duration": 3
        }
      ]
    },
    {
      "id": 5,
      "name": "Developer5",
      "level": 5,
      "total_assign_hour": 190,
      "total_week": "4.22",
      "todos": [
        {
          "id": 2,
          "name": "IT Task 1",
          "estimated_duration": 24
        },
        {
          "id": 7,
          "name": "IT Task 6",
          "estimated_duration": 4
        },
        {
          "id": 9,
          "name": "IT Task 8",
          "estimated_duration": 24
        },
        {
          "id": 12,
          "name": "IT Task 11",
          "estimated_duration": 6
        },
        {
          "id": 13,
          "name": "IT Task 12",
          "estimated_duration": 44
        },
        {
          "id": 19,
          "name": "IT Task 18",
          "estimated_duration": 22
        },
        {
          "id": 23,
          "name": "IT Task 22",
          "estimated_duration": 20
        },
        {
          "id": 25,
          "name": "IT Task 24",
          "estimated_duration": 12
        },
        {
          "id": 28,
          "name": "IT Task 27",
          "estimated_duration": 28
        },
        {
          "id": 32,
          "name": "IT Task 31",
          "estimated_duration": 10
        },
        {
          "id": 34,
          "name": "IT Task 33",
          "estimated_duration": 12
        },
        {
          "id": 35,
          "name": "IT Task 34",
          "estimated_duration": 30
        },
        {
          "id": 39,
          "name": "IT Task 38",
          "estimated_duration": 60
        },
        {
          "id": 45,
          "name": "IT Task 44",
          "estimated_duration": 40
        },
        {
          "id": 50,
          "name": "IT Task 49",
          "estimated_duration": 7
        },
        {
          "id": 52,
          "name": "IT Task 51",
          "estimated_duration": 10
        },
        {
          "id": 54,
          "name": "IT Task 53",
          "estimated_duration": 9
        },
        {
          "id": 57,
          "name": "IT Task 56",
          "estimated_duration": 30
        },
        {
          "id": 58,
          "name": "IT Task 57",
          "estimated_duration": 22
        },
        {
          "id": 63,
          "name": "IT Task 62",
          "estimated_duration": 6
        },
        {
          "id": 65,
          "name": "IT Task 64",
          "estimated_duration": 48
        },
        {
          "id": 70,
          "name": "Business Task 2",
          "estimated_duration": 6
        },
        {
          "id": 71,
          "name": "Business Task 3",
          "estimated_duration": 20
        },
        {
          "id": 75,
          "name": "Business Task 7",
          "estimated_duration": 22
        },
        {
          "id": 79,
          "name": "Business Task 11",
          "estimated_duration": 12
        },
        {
          "id": 83,
          "name": "Business Task 15",
          "estimated_duration": 24
        },
        {
          "id": 85,
          "name": "Business Task 17",
          "estimated_duration": 36
        },
        {
          "id": 90,
          "name": "Business Task 22",
          "estimated_duration": 10
        },
        {
          "id": 91,
          "name": "Business Task 23",
          "estimated_duration": 45
        },
        {
          "id": 95,
          "name": "Business Task 27",
          "estimated_duration": 27
        },
        {
          "id": 98,
          "name": "Business Task 30",
          "estimated_duration": 16
        },
        {
          "id": 102,
          "name": "Business Task 34",
          "estimated_duration": 18
        },
        {
          "id": 105,
          "name": "Business Task 37",
          "estimated_duration": 20
        },
        {
          "id": 107,
          "name": "Business Task 39",
          "estimated_duration": 35
        },
        {
          "id": 115,
          "name": "Business Task 47",
          "estimated_duration": 12
        },
        {
          "id": 117,
          "name": "Business Task 49",
          "estimated_duration": 35
        },
        {
          "id": 120,
          "name": "Business Task 52",
          "estimated_duration": 21
        },
        {
          "id": 123,
          "name": "Business Task 55",
          "estimated_duration": 22
        },
        {
          "id": 125,
          "name": "Business Task 57",
          "estimated_duration": 21
        },
        {
          "id": 127,
          "name": "Business Task 59",
          "estimated_duration": 36
        },
        {
          "id": 131,
          "name": "Business Task 63",
          "estimated_duration": 44
        }
      ]
    }
  ]
}
```

Bu alanda yapılan atamalar ve süre bilgileri yer almaktadır. Küçük bir geliştirme için bu kadarı yetirli görülmüştür.

## Öz Eleştiri

Sistem hızlı geliştirildiğinden birkaç yerde refactor edilmesi gerekir. Bunlardan bir tanesi aşağıda ki kod parçasıdır.

```
$integrationAdapter = "\App\Services\Integration\Todo\Adapters\\" . $integration['adapter_name'];

$integration = $integrationManager->loadIntegration(new DeliveryIntegration(new $integrationAdapter()));
```
