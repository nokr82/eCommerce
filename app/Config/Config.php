<?php
$config['sess_cookie_name']     = 'ci_session';
$config['sess_expiration']      = 7200; // 세션 유지 시간 (초 단위)
$config['sess_save_path']       = NULL; // 디폴트 저장 위치 사용
$config['sess_match_ip']        = FALSE;
$config['sess_time_to_update']  = 300;
$config['sess_regenerate_destroy'] = FALSE; // TRUE로 설정하면 각 세션 갱신시마다 이전 세션을 제거

$config['cookie_prefix']    = '';
$config['cookie_domain']    = '.yourdomain.com'; // 여기에 도메인 추가
$config['cookie_path']      = '/';
$config['cookie_secure']    = FALSE;
$config['cookie_httponly']  = FALSE;

// 자동 로그인을 위한 설정
$config['autologin_cookie_name'] = 'autologin';
$config['autologin_cookie_life'] = 604800; // 일주일 (초 단위)
