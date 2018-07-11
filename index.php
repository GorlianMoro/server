<?php
$jsondata = '{
  "persons_data": [{
    "firstName": "Иван",
    "lastName": "Иванов",
    "address": "г.Москва, ул. Алиева,2",
    "phoneNumber": "812 123-1234"
  }, {
    "firstName": "Пётр",
    "lastName": "Сидоров",
    "address": "г.Москва, ул. Мартынова,88",
    "phoneNumber": "812 385-1589"
  }, {
    "firstName": "Василий",
    "lastName": "Петров",
    "address": "г.Москва, ул. Фрунзе,64",
    "phoneNumber": "812 548-6728"
  }]
}';
$data = json_decode($jsondata) or exit('Ошибка декодирования json');
 ?>

 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>Телефонный справочник</title>
     <style >
       table {
         border: 2px solid black;
         text-align: center;
       }
       td {
         border: 1px solid black;
       }
     </style>
   </head>
   <body>
     <h1>Телефонный справочник</h1>
     <h2>База данных</h2>
     <table>
       <tr>
         <td>Имя</td>
         <td>Фамилия</td>
         <td>Адрес</td>
         <td>Номер телефона</td>
       </tr>
       <tr>
         <td><?php echo (!empty($data->persons_data[0]->firstName)) ? $data->persons_data[0]->firstName : 'не удалось получить имя'; ?></td>
         <td><?php echo (!empty($data->persons_data[0]->lastName)) ? $data->persons_data[0]->lastName : 'не удалось получить фамилию'; ?></td>
         <td><?php echo (!empty($data->persons_data[0]->address)) ? $data->persons_data[0]->address : 'не удалось получить адрес'; ?></td>
         <td><?php echo (!empty($data->persons_data[0]->phoneNumber)) ? $data->persons_data[0]->phoneNumber : 'не удалось получить телефон'; ?></td>
       </tr>
        <tr>
          <td><?php echo (!empty($data->persons_data[1]->firstName)) ? $data->persons_data[1]->firstName : 'не удалось получить имя'; ?></td>
          <td><?php echo (!empty($data->persons_data[1]->lastName)) ? $data->persons_data[1]->lastName : 'не удалось получить фамилию'; ?></td>
          <td><?php echo (!empty($data->persons_data[1]->address)) ? $data->persons_data[1]->address : 'не удалось получить адрес'; ?></td>
          <td><?php echo (!empty($data->persons_data[1]->phoneNumber)) ? $data->persons_data[1]->phoneNumber : 'не удалось получить телефон'; ?></td>
       </tr>
       <tr>
         <td><?php echo (!empty($data->persons_data[2]->firstName)) ? $data->persons_data[2]->firstName : 'не удалось получить имя'; ?></td>
         <td><?php echo (!empty($data->persons_data[2]->lastName)) ? $data->persons_data[2]->lastName : 'не удалось получить фамилию'; ?></td>
         <td><?php echo (!empty($data->persons_data[2]->address)) ? $data->persons_data[2]->address : 'не удалось получить адрес'; ?></td>
         <td><?php echo (!empty($data->persons_data[2]->phoneNumber)) ? $data->persons_data[2]->phoneNumber : 'не удалось получить телефон'; ?></td>
       </tr>
     </table>
   </body>
 </html>
