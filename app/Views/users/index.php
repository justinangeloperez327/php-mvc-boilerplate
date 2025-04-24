<main class="container mx-auto p-4 min-h-screen bg-gray-100 text-gray-800 rounded-lg shadow-md mt-4">
    <h1 class="text-2xl font-bold mb-4">Users</h1>
    <table class="table-auto w-full bg-white rounded-lg shadow-md">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr class="border-t">
                    <td class="px-4 py-2"><?php echo htmlspecialchars($user['id']); ?></td>
                    <td class="px-4 py-2"><?php echo htmlspecialchars($user['name']); ?></td>
                    <td class="px-4 py-2"><?php echo htmlspecialchars($user['email']); ?></td>
                    <td class="px-4 py-2">
                        <a href="/users/edit/<?php echo $user['id']; ?>" class="text-blue-500 hover:underline">Edit</a>
                        <a href="/users/delete/<?php echo $user['id']; ?>" class="text-red-500 hover:underline ml-2">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>