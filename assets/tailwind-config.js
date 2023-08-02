tailwind.config = {
  theme: {
    container: {
      screens: {
        xl: "1100px",
        "2xl": "1330px",
      },
    },
    extend: {
      colors: {
        primaryYellow: "#FEC400",
        secondary: "#FFBE34",
        textgray: "#4D5053",
      },
    },
    screens: {
      tablet: "640px",
      desktop: "1024px",
      wide: "1600px",
      fullhd: "1920px"
    },
  },
};