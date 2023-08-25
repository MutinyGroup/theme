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
				xl: '1100px',
				'2xl': '1496px',
			},
		},
		extend: {
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
			wide: '1496px',
			fullhd: '1920px',
		},
	},
} satisfies Config;
