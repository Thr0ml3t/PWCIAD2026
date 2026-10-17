<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWCI</title>
    <!-- Tailwind Play CDN: compiles classes in the browser. Fine for class/dev, not for production -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Reusable component classes. Utilities still win, e.g. class="btn w-full" -->
    <style type="text/tailwindcss">
        @layer components {
            .page {
                @apply mx-auto max-w-4xl px-4 py-8;
            }
            .page-title {
                @apply mb-6 text-2xl font-bold tracking-tight text-gray-900;
            }
            .card {
                @apply rounded-lg border border-gray-200 bg-white p-4 shadow-sm;
            }
            .btn {
                @apply inline-flex cursor-pointer items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600;
            }
            .label {
                @apply mb-1 block text-sm font-medium text-gray-700;
            }
            .input {
                @apply block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/30 focus:outline-none;
            }
            .error {
                @apply mt-1 text-sm text-red-600;
            }
            .link {
                @apply font-medium text-indigo-600 hover:underline;
            }
            .nav-link {
                @apply cursor-pointer rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white aria-[current=page]:bg-gray-900 aria-[current=page]:text-white;
            }
        }
    </style>
</head>
<body class="h-full text-gray-900">
