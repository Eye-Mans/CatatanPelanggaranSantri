/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./{index.php,insert.php,edit.php}'],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}

