<?php
$text = file_get_contents('./phonebook.json');
$phonebook = json_decode($text, true);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Homework2.1</title>
</head>

<body>
	 <div class="container">
            <div class="table">
            <h1>Телефонная книга</h1>
            <table>
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Адрес</th>
                        <th>Телефон</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($phonebook as $contact):?>

                    <tr>
                        <td><?php echo $contact['firstName']; ?></td>
                        <td><?php echo $contact['lastName']; ?></td>
                        <td><?php echo $contact['address']; ?></td>
                        <td><?php echo $contact['phoneNumber']; ?></td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>