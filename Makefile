

gen-php-source-code:
	rm -rf tmp && mkdir -p tmp
	curl -X 'POST' \
		'https://code.qiyutech.tech/code/gen/url' \
		-H 'accept: */*' \
		-H 'Content-Type: application/x-www-form-urlencoded' \
		-d 'openapi_url=https%3A%2F%2Fnotify.qiyutech.tech%2Fapi%2Fopenapi.json&dt_class_name=&dt_prefix=&stub_class_name=&stub_prefix=&stub_postfix=&dt_postfix=&language=php&path_base_url=https%3A%2F%2Fnotify.qiyutech.tech&php_namespace=Notify' \
		-o tmp/code.zip
	cd tmp && unzip code.zip
	mv -f tmp/*.php src
	rm -rf tmp

