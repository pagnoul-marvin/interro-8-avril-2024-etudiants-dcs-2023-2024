<?php

// Seed tables
echo 'Seeding Jiri table' . PHP_EOL;
$jiris = [
    ['name' => 'Projets Web 2024', 'starting_at' => '2024-01-19 08:30:00'],
    ['name' => 'Design Web 2024', 'starting_at' => '2024-06-19 08:30:00'],
    ['name' => 'Design Web 2022', 'starting_at' => '2022-06-19 08:30:00'],
    ['name' => 'Design Web 2021', 'starting_at' => '2021-06-19 08:30:00'],
    ['name' => 'Projets Web 2025', 'starting_at' => '2025-01-19 08:30:00'],
    ['name' => 'Projets Web 2026', 'starting_at' => '2026-01-19 08:30:00'],
    ['name' => 'Projets Web 2027', 'starting_at' => '2027-01-19 08:30:00'],
    ['name' => 'Design Web 2023', 'starting_at' => '2023-06-19 08:30:00'],
];
$insert_jiri_in_jiris_table_sql = 'INSERT INTO jiris (name, starting_at) VALUES (:name, :starting_at)';
$insert_jiri_in_jiris_table_stmt = $db->prepare($insert_jiri_in_jiris_table_sql);
foreach ($jiris as $jiri) {
    $insert_jiri_in_jiris_table_stmt->bindValue('name', $jiri['name']);
    $insert_jiri_in_jiris_table_stmt->bindValue('starting_at', $jiri['starting_at']);
    $insert_jiri_in_jiris_table_stmt->execute();
}
$count_jiris = count($jiris);
echo "Jiri table seeded with {$count_jiris} jiris" . PHP_EOL;


echo 'Seeding Users table' . PHP_EOL;
$users = [
    ['firstname' => 'Jacques', 'lastname' => 'Dubois', 'email' => 'jacquesdubois@gmail.com', 'password' => ''],
    ['firstname' => 'Jean', 'lastname' => 'Duchamp', 'email' => 'jeanduchamp@gmail.com', 'password' => ''],
];

$insert_user_in_users_table_sql = 'INSERT INTO users (firstname,lastname, email, password) VALUES (:firstname, :lastname, :email, :password)';
$insert_user_in_users_table_stmt = $db->preapre($insert_user_in_users_table_sql);
foreach ($users as $user) {
    $insert_user_in_users_table_stmt->bindValue('firstname', $user['firstname']);
    $insert_user_in_users_table_stmt->bindValue('lastname', $user['lastname']);
    $insert_user_in_users_table_stmt->bindValue('email', $user['email']);
    $insert_user_in_users_table_stmt->bindValue('password', $user['password']);
    $insert_user_in_users_table_stmt->execute();
}
$count_users = count($users);
echo "Users table seeded with {$count_users} users" . PHP_EOL;
