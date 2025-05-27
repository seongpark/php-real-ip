# PHP 접속한 실제 IP 불러오기
Proxy를 사용하며 PHP의 $_SERVER만으로 IP를 불러온다면 제대로 IP를 불러오지 못하여, 웹사이트에 접속하는 헤더를 사용해 유저의 실제 IP를 불러옵니다.

## 사용 방법
```php
echo getRealClientIp();
```
```getRealClientIp``` 함수를 호출합니다.
