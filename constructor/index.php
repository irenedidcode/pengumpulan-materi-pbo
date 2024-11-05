<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR CONSTRUCTOR</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body>
    <div class="text-center mt-2 mb-3">
        <h1 class="font-bold text-gray-600">DATA USER</h1>
    </div>
    
    <?php
        // memanggil class User.php
        require_once 'User.php';

        // melakukan instansiasi class->objek
        $user = new User(2, "Yutubb",  "yutubb@gmail.com", "Batamm", "adminn");


        // memberi nilai/assignment value
        $user->id = 2;
        $user->name = "Yutubb";
        $user->email = "Yutubb@gmail.com";
        $user->address = "Batamm";
        $user->role = "adminn";

    ?>
    <!-- <ul>
        <li><?php echo $user->id; ?></li>
        <li><?php echo $user->name; ?></li>
        <li><?php echo $user->email; ?></li>
        <li><?php echo $user->address; ?></li>
        <li><?php echo $user->role; ?></li>
    </ul> -->

    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Jabatan
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo htmlspecialchars($user->id); ?>
                </th>
                <td class="px-6 py-4">
                    <?php echo htmlspecialchars($user->name); ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo htmlspecialchars($user->email); ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo htmlspecialchars($user->address); ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo htmlspecialchars($user->role); ?>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>