<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="">

    <title><?php echo $title; ?></title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="<?php echo base_url() ?>">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="info">
                    <a class="nav-link" href="<?php echo base_url() . 'paginate_news'?>">Hot News</a>
                </li>
                <li class="nav-item" id="migrate">
                    <a class="nav-link" href="<?php echo base_url() . 'migrate'?>">Migration</a>
                </li>
                <li class="nav-item" id="add_new">
                    <a class="nav-link" href="<?php echo base_url() . 'news_insert'; ?>">Add New Record</a>
                </li>

            </ul>
        </div>
    </div>
</nav>