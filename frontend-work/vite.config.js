// vite.config.js
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    // call tailwindcss as a plugin (Tailwind works as a PostCSS plugin;
    // including it here follows the instructor's flow)
    tailwindcss()
  ]
});