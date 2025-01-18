# HeartGuard
Care for Every Heartbeat

## About the Model 
HeartGuard is a web-based application for heart disease prediction using a machine learning model. It allows users to input various health parameters, such as age, cholesterol level, and heart rate, to predict whether they have heart disease or not. The predictions are powered by a trained machine learning model integrated with Python scripts.

## Features
- Predict heart disease based on health data input.
- User-friendly interface for data entry.
- Accurate predictions using a trained machine learning model.
- Integration of PHP (Laravel) and Python for seamless backend processing.

##How to Use
1. Open the Prediction Form.
2. Fill in the required fields such as Age, Sex, Chest Pain Type, Cholesterol Level, etc.
3. Once you have filled in all the fields, click the Submit button to send the data for prediction.
4. After submission, the application will display the result page, indicating whether heart disease is detected or not based on the model's prediction.

## HeartGuard Interface  
The HeartGuard User Interface is designed to provide a seamless and user-friendly experience for heart disease prediction. The interface allows users to easily input various health parameters, such as age, cholesterol levels, and heart rate, into the form fields. Once the data is filled in, users simply click the "Predict Heart Condition" button to submit the information. The prediction result, indicating whether heart disease is detected or not, is then displayed on a separate result page. The interface prioritizes clarity and ease of use, making it accessible for users to quickly check their heart health status. The clean design ensures users can focus on entering their details accurately and receiving prompt, reliable predictions.

![HeartGuard](public/images/EyeCareAI.png)

## How to Run the Project

### Prerequisites
- PHP installed on your machine (minimum version: 7.4 or higher).
- Composer installed.
- Python installed (along with necessary dependencies like `scikit-learn` and `numpy`).
- Git installed.

### Setup Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yudhakrisnawan/HeartGuard.git
   cd HeartGuard

2. **Start the Laravel Server:**
   ```bash
   php artisan serve
   ```

3. **Access the Application:**
   Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
