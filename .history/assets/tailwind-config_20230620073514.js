tailwind.config = {
  theme: {
    container: {
      screens: {
        xl: "1080px",
        "2xl": "1496px",
      },
    },
    extend: {
      colors: {
        primaryYellow: "#FEC400",
        secondary: "#FFBE34",
        textgray: "#4D5053",
        darkblue: "#091242",
      },
    },
    screens: {
      tablet: "640px",
      desktop: "1024px",
      wide: "1440px"
    },
  },
};