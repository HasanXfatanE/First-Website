<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                     
                     
                        <svg  class="h-16 w-auto text-gray-700 sm:h-20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 595.28 841.89" style="enable-background:new 0 0 595.28 841.89;" xml:space="preserve">
                   <path d="M265.37,478c-48.41,0.09-92.15-32.64-107.69-78.25c-4.39-12.87-6.81-26.09-6.47-39.67c0.9-35.72,14.29-65.85,41.66-89.09
                       c17.78-15.1,38.4-24.09,61.89-26.23c25-2.28,48.21,3.09,69.36,16.31c30.04,18.78,47.99,46.14,53.54,80.97
                       c5.78,36.34-3.46,69.04-27.67,96.9c-17.91,20.62-40.59,33.29-67.8,37.3C276.61,477.08,270.97,477.43,265.37,478z M371.33,356.97
                       c-0.76-5.15-1.36-14.46-3.61-23.34c-6.58-25.92-20.93-46.89-42.85-62.27c-25.72-18.05-54.2-23.14-84.66-15.88
                       c-21.49,5.12-39.59,16.23-54.09,33.03c-15.12,17.51-23.83,37.87-26.44,60.75c-1.32,11.5-0.6,23.02,1.89,34.38
                       c5.32,24.35,17.11,44.97,36.23,60.99c23.07,19.33,49.78,27.25,79.75,23.89c21.96-2.46,41.11-11.39,57.35-26.11
                       C358.85,420.7,370.49,393.24,371.33,356.97z"/>
                   <g>
                       <path d="M373.11,407.15c1.28-4.72,2.64-9.62,3.92-14.53c3.66-13.99,4.39-28.2,2.7-42.51c-0.36-3.04,0.44-4.63,3.25-5.65
                           c11.65-4.25,23.3-8.5,34.87-12.95c18.5-7.12,36.84-14.61,53.14-26.18c6.3-4.47,11.86-9.74,16.15-16.32
                           c-0.18,6.76-2.89,12.6-6.7,17.88c-8,11.1-18.77,19.15-30.73,25.27c-13.63,6.98-27.72,13.06-41.71,19.29
                           c-3.69,1.64-5.91,3.68-6.78,7.86c-2.14,10.37-5.33,20.46-11.34,29.32C385.09,395.65,380.63,403.11,373.11,407.15z M378.12,389.89
                           c-0.06,1.33-0.13,2.73-0.2,4.13c1.27-0.44,2.54-0.89,4.3-1.5C380.58,391.48,379.61,390.86,378.12,389.89z"/>
                       <path d="M364.9,422.96c2.31-5.94,5.44-10.01,10.09-13.49c5.37-4.03,9.67-9.47,14.64-14.08c1.09-1.01-0.29-5.22,2.63-3.21
                           c1.31-3.28,2.71-6.42,3.81-9.66c2.55-7.49,4.81-15.09,7.51-22.52c0.7-1.94,2.28-4.05,4.04-5.01c3.79-2.05,7.94-3.46,11.99-4.98
                           c0.99-0.37,2.77-0.62,3.17-0.12c0.68,0.86,1,2.49,0.68,3.56c-2.23,7.37-4.27,14.83-7.11,21.97c-5.96,14.99-14.66,28.06-28.22,37.39
                           C381.19,417.57,373.58,420.74,364.9,422.96z"/>
                       <path d="M478.44,313.36c-0.66,6.05-2.76,11.2-5.64,16.05c-7.76,13.05-19.44,21.49-32.99,27.6c-4.95,2.23-10.06,4.1-15.73,6.39
                           c-0.11-1.63-0.42-2.76-0.2-3.77c0.71-3.24,1.22-6.62,2.58-9.59c0.95-2.08,2.86-4.12,4.87-5.27c6.99-3.98,14.09-7.81,21.37-11.21
                           c4.83-2.25,8.6-5.82,12.73-8.91c4.23-3.17,7.9-7.1,11.82-10.68C477.45,313.79,477.75,313.71,478.44,313.36z"/>
                       <path d="M470.19,337.31c-6.56,27.71-31.66,42.64-54.38,46.67c0.42-1.54,0.65-2.82,1.11-4.02c1.2-3.15,2.66-6.21,3.69-9.41
                           c0.86-2.64,2.55-3.96,5.02-5.04c8.54-3.74,17.15-7.4,25.4-11.73c6.97-3.66,12.8-8.98,17.7-15.21
                           C468.97,338.25,469.33,338.03,470.19,337.31z"/>
                       <path d="M457.44,367.1c-3.64,5.06-6.79,10.6-11.06,15.06c-5.14,5.37-10.89,10.34-17.02,14.53c-6.82,4.67-14.6,7.65-23.05,8.18
                           c-0.99,0.06-2.01-0.43-3.02-0.66c0.34-0.95,0.5-2.02,1.04-2.84c2.24-3.46,4.39-7,6.97-10.19c1.33-1.65,3.32-3.34,5.29-3.8
                           c14.57-3.39,27.65-9.52,38.5-20.01c0.42-0.41,1.02-0.65,1.53-0.97C456.89,366.64,457.16,366.87,457.44,367.1z"/>
                       <path d="M429.87,399.96c-9.52,10.96-20.62,18.86-35.81,18.68c-1.71-0.02-3.41-1.01-5.12-1.56c1.07-1.21,2.08-2.46,3.2-3.61
                           c3.67-3.77,7.67-5.74,13.43-5.56c8.37,0.25,16.13-3.03,23.24-7.56C429.12,400.16,429.51,400.09,429.87,399.96z"/>
                       <path d="M406.07,420.81c-7.45,5.08-14.95,10.08-24.42,9.23c-2.49-0.22-5-1.8-7.21-3.2c-1.54-0.97-1.57-2.55,0.48-3.47
                           c2.38-1.07,4.72-2.22,7.13-3.21c0.74-0.31,1.82-0.54,2.47-0.23C391.59,423.31,398.77,422.67,406.07,420.81z"/>
                       <path d="M352.76,439.97c3.21-4.4,5.58-8.16,8.5-11.41c1.22-1.36,3.66-1.56,5.47-2.45c2.94-1.44,3.27,1.44,4.69,2.63
                           c2.25,1.87,4.65,3.57,7.4,5.66C370.56,436.16,362.15,437.96,352.76,439.97z"/>
                   </g>
                   <g>
                       <path d="M138.54,382.19c-5.65-9.09-8.43-19.31-10.14-29.75c-0.69-4.21-2.83-6.33-6.45-8.13c-13.73-6.8-27.56-13.45-40.9-20.97
                           c-11.71-6.61-22.14-15.08-29.68-26.5c-3.59-5.43-6.06-11.38-5.96-18.14c4.02,6.75,9.36,12.24,15.47,16.96
                           c15.82,12.23,33.84,20.46,52.03,28.32c11.38,4.92,22.85,9.64,34.32,14.36c2.76,1.14,3.5,2.76,3.02,5.78
                           c-2.27,14.23-2.12,28.46,0.97,42.59c1.08,4.96,2.24,9.91,3.33,14.68C147.19,397.06,143.03,389.43,138.54,382.19z M146.03,386.42
                           c1.74,0.69,2.98,1.18,4.23,1.68c-0.01-1.4-0.02-2.81-0.03-4.14C148.7,384.85,147.71,385.44,146.03,386.42z"/>
                       <path d="M162.1,417.53c-2.07-6.02-5.02-10.22-9.53-13.89c-5.21-4.24-9.27-9.86-14.05-14.66c-1.05-1.05,0.5-5.2-2.5-3.31
                           c-1.17-3.33-2.45-6.52-3.42-9.8c-2.24-7.59-4.19-15.27-6.59-22.81c-0.63-1.96-2.11-4.14-3.83-5.17c-3.7-2.2-7.79-3.78-11.78-5.47
                           c-0.97-0.41-2.75-0.74-3.16-0.25c-0.71,0.83-1.1,2.45-0.83,3.53c1.93,7.45,3.67,14.99,6.22,22.24
                           c5.35,15.22,13.51,28.63,26.68,38.51C146.04,411.49,153.52,414.96,162.1,417.53z"/>
                       <path d="M53.11,303.41c0.41,6.07,2.3,11.3,4.98,16.26c7.22,13.36,18.55,22.26,31.84,28.92c4.85,2.43,9.88,4.5,15.45,7.02
                           c0.17-1.62,0.53-2.74,0.35-3.75c-0.58-3.27-0.95-6.66-2.19-9.69c-0.87-2.12-2.69-4.24-4.65-5.46c-6.82-4.26-13.76-8.38-20.9-12.07
                           c-4.73-2.44-8.36-6.17-12.36-9.42c-4.1-3.34-7.6-7.41-11.38-11.15C54.07,303.87,53.78,303.78,53.11,303.41z"/>
                       <path d="M60.38,327.67c5.43,27.95,29.9,43.89,52.43,48.84c-0.35-1.55-0.54-2.85-0.94-4.07c-1.07-3.2-2.4-6.32-3.31-9.56
                           c-0.75-2.68-2.38-4.06-4.81-5.24c-8.39-4.08-16.84-8.09-24.9-12.75c-6.81-3.94-12.42-9.49-17.06-15.92
                           C61.55,328.66,61.2,328.43,60.38,327.67z"/>
                       <path d="M71.91,357.96c3.43,5.21,6.35,10.87,10.44,15.5c4.92,5.57,10.46,10.77,16.42,15.21c6.63,4.94,14.28,8.23,22.7,9.11
                           c0.98,0.1,2.03-0.35,3.04-0.54c-0.3-0.97-0.42-2.04-0.92-2.88c-2.09-3.55-4.1-7.17-6.55-10.47c-1.26-1.7-3.18-3.47-5.13-4.01
                           c-14.42-3.98-27.24-10.63-37.65-21.56c-0.41-0.43-0.99-0.69-1.49-1.03C72.47,357.52,72.19,357.74,71.91,357.96z"/>
                       <path d="M98.11,391.91c9.07,11.34,19.84,19.68,35.03,20.12c1.71,0.05,3.45-0.87,5.18-1.35c-1.02-1.25-1.98-2.54-3.06-3.74
                           c-3.52-3.91-7.43-6.04-13.19-6.11c-8.38-0.09-16-3.68-22.91-8.5C98.86,392.14,98.47,392.06,98.11,391.91z"/>
                       <path d="M121.05,413.71c7.24,5.37,14.52,10.68,24.02,10.22c2.5-0.12,5.07-1.59,7.33-2.9c1.57-0.91,1.67-2.48-0.34-3.48
                           c-2.33-1.16-4.62-2.41-6.99-3.5c-0.73-0.34-1.8-0.61-2.46-0.33C135.41,416.8,128.27,415.87,121.05,413.71z"/>
                       <path d="M173.54,435.02c-3.03-4.53-5.24-8.38-8.03-11.75c-1.16-1.4-3.59-1.71-5.36-2.67c-2.88-1.55-3.33,1.31-4.8,2.43
                           c-2.32,1.78-4.79,3.38-7.63,5.35C155.91,430.49,164.24,432.63,173.54,435.02z"/>
                   </g>
                   <path d="M205.31,337.28l-2.64-1.87c4.38-4.98,7.59-8.13,9.65-9.46c3.73-2.4,7.53-3.6,11.39-3.6c3.95,0,7.06,1.01,9.33,3.02
                       c2.27,2.02,3.41,4.61,3.41,7.79c0,6.69-5.06,13.79-15.19,21.3c3.48,0.17,6.11,0.8,7.92,1.87c1.8,1.07,3.27,2.71,4.41,4.92
                       c1.14,2.21,1.71,4.84,1.71,7.88c0,8.28-4.18,15.98-12.55,23.1c-7.17,6.09-14.52,9.14-22.07,9.14c-3.39,0-6.45-0.77-9.17-2.32
                       c-2.72-1.54-4.09-3.45-4.09-5.73c0-0.94,0.35-1.77,1.06-2.48c0.71-0.71,1.53-1.06,2.48-1.06c1.29,0,2.77,0.79,4.44,2.38
                       c2.19,2.1,3.82,3.41,4.89,3.92c1.5,0.73,2.83,1.09,3.99,1.09c3.35,0,7.08-1.97,11.2-5.92c6.09-5.75,9.14-12.1,9.14-19.05
                       c0-3.47-0.96-6.25-2.86-8.33c-1.91-2.08-4.37-3.12-7.37-3.12c-2.19,0-4.68,0.49-7.47,1.48l0.45-3.99
                       c5.49-1.93,10.43-5.34,14.8-10.23c3.09-3.43,4.63-6.91,4.63-10.42c0-2.66-0.68-4.74-2.03-6.24c-1.35-1.5-3.19-2.25-5.5-2.25
                       C214.38,329.11,209.73,331.84,205.31,337.28z"/>
                   <path d="M296.56,402.1l-5.08-69.32c-1.12,11.67-3.18,22.56-6.18,32.66c-3,10.1-6.41,17.91-10.23,23.42
                       c-3.82,5.51-7.72,9.39-11.71,11.62c-3.99,2.23-7.94,3.35-11.84,3.35c-2.36,0-4.17-0.48-5.44-1.45c-1.27-0.96-1.9-2.13-1.9-3.51
                       c0-1.16,0.46-2.17,1.38-3.03c0.92-0.86,2.09-1.29,3.51-1.29c1.03,0,2.51,0.22,4.44,0.68c1.76,0.45,3.22,0.67,4.38,0.67
                       c2.02,0,4.12-0.75,6.31-2.25c3.3-2.23,6.57-6.22,9.81-11.99c3.24-5.76,6.13-13.8,8.69-24.11c2.55-10.31,4.15-20.37,4.79-30.19
                       c-9.74,0-17.66,2.42-23.75,7.27c-4.85,3.86-7.27,8.17-7.27,12.94c0,2.1,1.14,4.63,3.43,7.59c1.23,1.59,1.84,2.87,1.84,3.86
                       c0,1.12-0.35,2.04-1.06,2.77c-0.7,0.73-1.55,1.09-2.53,1.09c-1.66,0-3.14-0.94-4.41-2.83c-1.75-2.53-2.62-5.53-2.62-9.01
                       c0-4.89,1.64-9.58,4.92-14.06c3.28-4.48,7.83-7.89,13.64-10.23c5.81-2.34,12.62-3.53,20.43-3.57c4.2,0,7.57-0.39,10.1-1.16
                       c-0.14,3.86-0.2,5.94-0.18,6.24c-0.02,0.39,0.04,1.27,0.17,2.64l3.74,49.01c10.38-18.1,20.52-33,30.43-44.7
                       c7.03-8.28,13.16-13.88,18.38-16.8c-2.98,8.15-6.17,18.9-9.58,32.24l-7.9,30.89c-0.43,1.72-1.01,4.23-1.75,7.53l-1.55,6.89
                       c3.26,0.77,6.25,1.16,8.95,1.16c2.19,0,4.53-0.26,7.02-0.77l-0.84,3.73c-2.19,0.39-3.89,0.58-5.09,0.58c-1.76,0-4.29-0.19-7.6-0.58
                       c-2.7-0.34-5.11-0.51-7.21-0.51c-2.23,0-4.76,0.43-7.6,1.29c2.37-6.18,4.84-14.48,7.42-24.9l4.97-19.69
                       c2.11-8.49,3.93-14.33,5.48-17.5c-3.44,3.91-8.76,11.08-15.95,21.52c-5.77,8.42-12.22,19.07-19.37,31.96L296.56,402.1z"/>
                   </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                              
                              
                              
                              
                              
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                     






                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    








                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   









                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    







                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\First-Project\resources\views/welcome.blade.php ENDPATH**/ ?>