import type { Config } from 'tailwindcss';

module.exports = {
	content: [
		'./assets/**/*.{js,ts}',
		'./parts/**/*.{html,php}',
		'./patterns/**/*.{html,php}',
		'./templates/**/*.{html,php}',
	],
	plugins: [require('tailwind-clip-path')],
	theme: {
		container: {
			screens: {
				lg: '960px',
				'xl': '1080px',
				'2xl': '1540px',
				'3xl': '2100px',
			},
		},
		extend: {
			keyframes: {
        textRoll: {
          '0%': { opacity: '1', transform: 'translateY(0px)' },
          '50%': { opacity: '1', transform: 'translateY(-25px)' },
          '51%': { opacity: '0' },
          '52%': { opacity: '0', transform: 'translateY(25px)' },
          '53%': { opacity: '1', transform: 'translateY(25px)' },
          '100%': { transform: 'translateY(0px)' },
        },
			animation: {
        textRoll: 'textRoll 0.5s linear backwards',
      },
			colors: {
				primaryYellow: '#FEC400',
				secondary: '#FFBE34',
				textgray: '#4D5053',
				darkBlack: '#101010',
				brightWhite: '#F2F2F2',
			},
			
		},
		screens: {
			mobile: '480px',
			tablet: '640px',
			desktop: '1024px',
			wide: '1680px',
			fullhd: '1920px',
		},
	},
} satisfies Config;
