<?php
	$lang->socialxe = 'SocialXE';
	$lang->client_token = 'Client Token';
	$lang->about_client_token = 'SocialXE 사이트에서 발급받은 Client Token을 입력하세요.';
	$lang->server_hostname = 'SocialXE 서버의 이름';
	$lang->about_server_hostname = 'SocialXE 기능을 요청할 서버의 도메인을 입력해주세요.';
	$lang->server_query = 'SocialXE 서버 경로';
	$lang->about_server_query = 'SocialXE 기능을 요청할 query url을 입력해 주세요.';
	$lang->use_ssl = 'SSL 연결';
	$lang->about_use_ssl = 'SocialXE 서버와 통신할 때 보안연결을 사용합니다.';
	$lang->hashtag = '태그';
	$lang->about_hashtag = '소셜 서비스로 글이 전송될 때 표시될 태그를 설정하세요. (#생략하고 작성)';
	$lang->select_service = '서비스 선택';
	$lang->use_social_login = '소셜 로그인 사용';
	$lang->about_use_social_login = '사이트에 별도의 회원가입 없이 소셜 네트워크 아이디로 로그인 가능하게 하려면 체크하세요.';
	$lang->use_social_info = '소셜 정보 통합 사용';
	$lang->about_use_social_info = '회원 정보에 소셜 정보를 통합하고 글, 댓글에 대해 자동으로 소셜 연동이 되도록 합니다.';
	$lang->about_part_social_info = '이 모듈에서 쓰는 글, 댓글에 대해 소셜 통합 기능을 이용할 수 있도록 합니다.';
	$lang->use_short_url = '짧은 주소 사용';
	$lang->about_use_short_url = '소셜 사이트로 글의 링크를 전달할 때 짧게 줄여진 주소를 사용합니다.';
	$lang->bitly_username = 'bit.ly Username';
	$lang->bitly_api_key = 'bit.ly API Key';

	$lang->title_social_login_additional = '소셜 로그인 추가 정보 입력';
	$lang->about_social_login_additional = '처음 로그인 시도하셨군요! 아래 추가 정보 입력이 필요합니다.';
	$lang->title_social_info = '소셜 정보';
	$lang->about_social_info = '이곳의 설정은 사이트 전역 설정입니다. 로그인하는 시점에 이 설정이 적용되며 글이나 댓글을 작성하는 시점에 자유롭게 소셜 사이트 로그인이나 로그아웃을 할 수 있습니다.';
	$lang->title_social_login = '소셜 로그인';
	$lang->about_social_login = '별도의 회원가입 절차 없이 소셜 사이트 중 하나의 아이디를 이용하여 로그인할 수 있습니다. 소셜 아이디로 로그인 시 아이디와 메일 등의 기본 정보는 이 사이트에 저장 되지만 비밀번호와 인증을 위한 처리는 해당 소셜 사이트에서 이루어집니다.';

	$lang->cmd_unlink_social_info = '연결끊기';
	$lang->cmd_link_social_info = '연결하기';
	$lang->cmd_social_send_on = '전송하기';
	$lang->cmd_social_send_off = '전송끄기';
	$lang->cmd_change_master_provider = '대표계정 변경';
	$lang->cmd_setting = '환경설정';
	$lang->cmd_bitly = 'bit.ly 통계';
	$lang->cmd_delete_checked = '선택 항목 삭제';

	$lang->set = '설정 됨';
	$lang->not_set = '설정 안 됨';
	$lang->social_send = '글과 댓글을 전송합니다.';
	$lang->social_not_send = '글과 댓글을 전송하지 않습니다.';
	$lang->master_provider = '대표 계정';
	$lang->bitly_summary = 'bit.ly 통계 페이지';
	$lang->bitly_info = '정보 페이지';

	$lang->msg_login = '선택하신 서비스로 로그인 요청 중입니다.<br />잠시만 기다려주세요.';
	$lang->msg_redirect = '오랫동안 응답이 없다면 이곳을 클릭하세요.';
	$lang->msg_request_error = 'SocialXE 서버에 API 요청이 실패했습니다.';
	$lang->msg_invalid_provider = '올바른 서비스 제공자가 아닙니다.';
	$lang->msg_invalid_request_client = '인증된 클라이언트가 아닙니다.';
	$lang->msg_invalid_request_domain = '사용이 허용된 도메인이 아닙니다.';
	$lang->msg_send_failed = '%s에 전송이 실패했습니다. (%s)';
	$lang->msg_not_allow_social_login = '소셜 로그인 기능을 사용하지 않고 있습니다.';
	$lang->msg_not_logged_social = '소셜 사이트에 로그인 되지 않았습니다.';
	$lang->msg_not_use_social_info = '소셜 정보 통합 기능을 사용하고 있지 않습니다.';
	$lang->msg_provider_id_exist = '해당 서비스의 아이디가 이미 다른 XE 아이디에 연결되어 있습니다.';
	$lang->msg_first_provider = '가입 시 사용한 서비스는 연결 해제할 수 없습니다.';

	$lang->provider['xe'] = 'XE';
	$lang->provider['twitter'] = '트위터';
	$lang->provider['me2day'] = '미투데이';
	$lang->provider['facebook'] = '페이스북';
	$lang->provider['yozm'] = '요즘';
?>