<!doctype html>
<html data-bs-theme="<?= $theme ?? $settings['application_theme'] ?>" lang="id">
<head>
	<!-- Metadata -->
	<meta charset="utf-8" />
	<meta content="initial-scale=1.0, width=device-width" name="viewport" />
	<meta content="ie=edge" http-equiv="X-UA-Compatible" />
	<meta content="<?= $settings['application_theme'] ?>" name="color-scheme" />
	<meta content="#0d6efd" name="theme-color" />

	<!-- Browser tab display -->
	<link href="/favicon.svg" rel="apple-touch-icon">
	<link href="/favicon.svg" rel="icon shortcut" type="image/x-icon">
	<title><?= $title ?> | <?= html_escape($settings['application_name']) ?></title>

	<!-- Stylesheet -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/css/style.css" rel="stylesheet">
</head>
<body class="<?= $this->uri->segment(1) !== 'masuk' ? ($settings['application_theme'] === 'dark' ?: 'bg-body-secondary') : 'bg-primary-subtle bg-gradient' ?> d-flex flex-column min-dvh-100">