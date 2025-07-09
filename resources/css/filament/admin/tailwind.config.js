import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    darkMode: 'class', // or 'class' for manual control
    content: [
        './app/Filament/Clusters/Blog/**/*.php',
        './resources/views/filament/clusters/blog/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php',
    ],
}