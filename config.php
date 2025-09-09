<?php
require 'vendor/autoload.php';

use Supabase\CreateClient;

$supabaseUrl = 'URL_DO_SEU_PROJETO_SUPABASE';
$supabaseKey = 'SUA_CHAVE_ANON_OU_SERVICE_ROLE';

$supabase = new CreateClient($supabaseUrl, $supabaseKey);