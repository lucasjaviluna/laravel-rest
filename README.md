# laravel-rest

https://app.pluralsight.com/player?course=php-laravel-restful-web-services&author=max-schwarzmueller&name=php-laravel-restful-web-services-m2&clip=11&mode=live

//Body Request
{
    "time": "201601301330CET",
    "title": "Test Meeting",
    "description": "Test",
    "user_id": 1,
    "meeting_id": 2,
    "name": "Vero",
    "email": "lamaslinda@gmail.com",
    "password": "beijao"
}

//Headers que necesito usar para los request a la API
X-Requested-With:  XMLHttpRequest
Content-Type:  application/json
Authorization: bearer: token de JWTAuth
