<?php
    class classHome
    {
        function service1()
        {
            return pdo_query_one('SELECT * FROM `blog` WHERE `id` = 1');
        }
        function service2()
        {
            return pdo_query_one('SELECT * FROM `blog` WHERE `id` = 2');
        }
        function service3()
        {
            return pdo_query_one('SELECT * FROM `blog` WHERE `id` = 3');
        }
        function service4()
        {
            return pdo_query_one('SELECT * FROM `blog` WHERE `id` = 4');
        }
        function service5()
        {
            return pdo_query_one('SELECT * FROM `blog` WHERE `id` = 5');
        }
        function service6()
        {
            return pdo_query_one('SELECT * FROM `blog` WHERE `id` = 6');
        }
        function loadSPnew()
        {
            return pdo_query('SELECT * FROM `products` ORDER BY `id` DESC');
        }
        function listhot()
        {
            $sql = 'SELECT * from `products` ORDER BY `vote` DESC LIMIT 8';
            return pdo_query($sql);
        }
    }

?>
