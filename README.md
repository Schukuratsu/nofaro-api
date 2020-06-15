# Desafio Nofaro API

## Sobre

Este foi um desafio proposto a mim pela equipe da nofaro no processo de seleção, montar uma api utilizando Laravel e MySQL.

## Testando a API

Para testar a api eu disponibilizei um arquivo exportado do Postman (Nofaro_api_postman_collection.json) apontando para essa aplicação com deploy no Heroku (https://nofaro-api.herokuapp.com/), só precisa importar no Postman e a partir daí pode modificar como quiser para testar os endpoints, a paginação e a validação

## Lista de endpoints

### GET

- https://nofaro-api.herokuapp.com/api/v1/pets?page=**1** | Lista todos os pets (Index)
- https://nofaro-api.herokuapp.com/api/v1/pet/**1** | Retorna o pet selecionado (Show)
- https://nofaro-api.herokuapp.com/api/v1/procurar-por-pet/**partialName**?page=**1** | Busca os pets por nome (QueryByPartialName)
- https://nofaro-api.herokuapp.com/api/v1/atendimentos?page=**1** | Lista todos os atendimentos (Index)
- https://nofaro-api.herokuapp.com/api/v1/atendimento/**1** | Retorna o atendimento selecionado (Show)
- https://nofaro-api.herokuapp.com/api/v1/atendimentos-do-pet/**1**?page=**1** | Retorna os atendimentos do pet selecionado (QueryByPetId)

### POST (enviar como BODY -> FORM-DATA ou BODY -> RAW -> JSON)

- https://nofaro-api.herokuapp.com/api/v1/pet | Cria um novo pet (Store)
- https://nofaro-api.herokuapp.com/api/v1/atendimento | Cria um novo atendimento (Store)

### PUT (enviar como BODY -> RAW -> JSON)

- https://nofaro-api.herokuapp.com/api/v1/pet/**1** | Atualiza um pet (Update)
- https://nofaro-api.herokuapp.com/api/v1/atendimento/**1** | Atualiza um atendimento (Update)

### DELETE

-https://nofaro-api.herokuapp.com/api/v1/pet/**1** | Remove o pet selecionado (Destroy)
-https://nofaro-api.herokuapp.com/api/v1/atendimento/**1** | Remove o atendimento selecionado (Destroy)



<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
