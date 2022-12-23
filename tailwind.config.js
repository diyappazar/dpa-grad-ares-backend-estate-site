/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.{php,html,js}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],

  // daisyUI config (optional)
  daisyui: {
    styled: true,
    themes: true,
    base: true,
    utils: true,
    logs: true,
    rtl: false,
    prefix: "",
    darkTheme: "dark",
  },
}
module.exports = {

  plugins: [
      require('flowbite/plugin')
  ]

}