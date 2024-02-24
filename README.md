# my-laravel-tailwind-project
 Project laravel pour la mise en pratiquue en général de css et tailwindcc


npm install -D tailwindcss postcss autoprefixer

npx tailwindcss init --full -p

tailwind.config.js
```js
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

./resources/css/app.css
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

dans blade
```php
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

