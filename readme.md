<h1 align="center">
  <a href="https://captaincore.io"><img src="https://captaincore.io/wp-content/uploads/2018/02/main-web-icons-captain.png" width="70" /></a><br />
CaptainCore GUI

</h1>

[CaptainCore GUI](https://captaincore.io) is a WordPress plugin part of the CaptainCore toolkit (a powerful toolkit for managing WordPress sites via SSH & WP-CLI). Requires a connection with a CaptainCore CLI (see installation notes).

[![emoji-log](https://cdn.rawgit.com/ahmadawais/stuff/ca97874/emoji-log/flat.svg)](https://github.com/ahmadawais/Emoji-Log/)

## Installation

1. Upload `/captaincore/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. CaptainCore requires access to a remote server running CaptainCore CLI. Add following auth info to wp-config.php file.

```
# CaptainCore CLI keys
define( 'CAPTAINCORE_CLI_TOKEN', "xxxxxxxxxxxxxxxxxxxxxxxxx" );
define( 'CAPTAINCORE_CLI_USER', "xxxxxxxx" );
define( 'CAPTAINCORE_CLI_KEY', "xxxxxxxxxxxxxxxxxxxxxxxxx" );
define( 'CAPTAINCORE_CLI_ADDRESS', "xxx.xxx.xxx.xxx" );
define( 'CAPTAINCORE_CLI_PORT', "xxxxx" );

# CaptainCore B2 keys
define( 'CAPTAINCORE_B2_ACCOUNT_ID', 'xxxxxxxxxxxx' );
define( 'CAPTAINCORE_B2_ACCOUNT_KEY', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' );
define( 'CAPTAINCORE_B2_BUCKET_ID', 'xxxxxxxxxxxxxxxxxxxxxxxx' );
define( 'CAPTAINCORE_B2_SNAPSHOTS', "Bucket/Foldername" );
```

## License
This is free software under the terms of MIT the license (check the LICENSE file included in this package).
