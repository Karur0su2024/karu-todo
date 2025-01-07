<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>¨



<body class="bg-gray-100"> <!-- Sets the background color to a light gray -->
    <div class="container mx-auto mt-10"> <!-- Centers the container and adds top margin -->
        <div class="bg-white p-6 rounded-lg shadow-lg"> <!-- White background, padding, rounded corners, and shadow -->
            <h1 class="text-2xl font-bold mb-4">Todo List</h1> <!-- Large bold text with bottom margin -->
            <form class="mb-4"> <!-- Bottom margin -->
                <input type="text" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Add a new task">
                <!-- Full width, padding, border, and rounded corners -->
                <button type="submit" class="mt-2 w-full bg-blue-500 text-white p-2 rounded-lg">Add Task</button>
                <!-- Top margin, full width, blue background, white text, padding, and rounded corners -->
            </form>
            <ul>
                <li class="flex justify-between items-center bg-gray-200 p-2 rounded-lg mb-2">
                    <!-- Flexbox, space between items, center alignment, light gray background, padding, rounded corners, and bottom margin -->
                    <span>Sample Task 1</span>
                    <button class="bg-red-500 text-white p-1 rounded-lg">Delete</button>
                    <!-- Red background, white text, padding, and rounded corners -->
                </li>
                <li class="flex justify-between items-center bg-gray-200 p-2 rounded-lg mb-2">
                    <!-- Flexbox, space between items, center alignment, light gray background, padding, rounded corners, and bottom margin -->
                    <span>Sample Task 2</span>
                    <button class="bg-red-500 text-white p-1 rounded-lg">Delete</button>
                    <!-- Red background, white text, padding, and rounded corners -->
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
