module.exports = {
  content: ["./app/Views/**/*.php", "./public/**/*.html", "./public/**/*.js"],
  safelist: [
    "min-h-[calc(100vh-80px)]",
    "bg-[rgba(191,36,65,0.4)]",
    "hover:bg-[rgba(191,36,65,0.75)]",
    "[text-shadow:0_2px_8px_rgba(0,0,0,0.7)]",
    "[text-shadow:0_1px_6px_rgba(0,0,0,0.6)]",
    // Detail Kelas Page
    "bg-[#19253f]",
    "h-fit",
    "disabled:opacity-60",
    "max-w-6xl",
    "max-w-xs",
    "max-w-sm",
    // Daftar Kelas Page
    // Arbitrary color
    "bg-[#19253f]",
    "bg-primary/5",
    // Width / size yang sering ke-skip
    "max-w-6xl",
    "max-w-xs",
    "max-w-sm",
    "h-fit",
    // Border & ring dari Alpine :class
    "border-primary",
    "ring-2",
    "ring-primary",
    // Variant states
    "disabled:opacity-60",
    "disabled:opacity-75",
    "disabled:cursor-not-allowed",
    // Focus-visible variants
    "focus-visible:outline-2",
    "focus-visible:outline-offset-2",
    "focus-visible:outline-primary",
    "dark:focus-visible:outline-primary-dark",
    // Dark-mode background with opacity
    "dark:bg-surface-dark-alt/50",
    // Hover variants berbasis custom color
    "hover:border-primary",
  ],
};
