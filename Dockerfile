FROM wordpress:latest

LABEL title="WP-CLI"\
  version="1.0"\
  description="Install WP-CLI"

# WP-CLIのインストール
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  && chmod +x wp-cli.phar \
  && mv wp-cli.phar /usr/local/bin/wp \
  && wp --info
