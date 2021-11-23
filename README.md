# b1mg-project.eu

This is the source code used to build our website: https://b1mg-project.eu/

**DISCLAIMER:**

**This repo is here for the purpose of 1) public backup, and 2) sharing how the website works.**

**This is NOT a place for issues, pull requests.**

**Please contact Serena Scollen at serena.scollen@elixir-europe.org, or Martin Cook at martin.cook@elixir-europe.org, for
any questions, suggestions, etc.**

## Testing locally

It is implemented in php without any backend, but intended to stay simple.You may need to configure virtual host or use Devilbox (http://devilbox.org/) 

```
git clone https://github.com/elixir-europe/b1mg.git
```

Please note that if SSL is not configured on your localhost then please comment out the below lines from the .htaccess file
```
#RewriteCond %{HTTPS} !=on
#RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301,NE]
#Header always set Content-Security-Policy "upgrade-insecure-requests;"
```

## Contributors

* Martin Cook
* Prithviraj Mitra
