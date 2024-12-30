/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.php"],
  theme: {
    extend: {
      colors:{
        bgcolor: "#ffff",
        heading:"#0d3dd9",
        bb:"#141E61",
        redd:"#ff352e",
        dark:"#001c60",
      },
      margin:{
        extra:"3%",
        small:"5%",
        top: "10%",
        x:"15%",
        normal:"10%",
        dest:"40%",
      },
      padding:{
        extra:"3%",
        small:"5%",
        top: "10%",
        x:"15%",
        large:"20%",
        normal:"10%",
        dest:"40%",
      },
      fontSize: {
        lg: "25px",
        md: "18px",
        sm: "14px",
        head: "2.5rem",
      },
      height: {
        bg: "65vh",
        img: "40vh",
        why: "70vh",
        map:"50vh",
        imgs:"200px",
      },
      width: {
        hr: "98%",
      },
      fontFamily: {
        heading: ["Domine"],
        paragraph: ["Domine"]
      },
    },
  },
  plugins: [],
}

