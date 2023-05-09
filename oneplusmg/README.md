<div align="center">
  <img src="https://b1mg-project.eu/images/b1mg-logo.png" alt="B1MG logo" width="150" />
</div>

# Beyond 1 Million Genomes (B1MG)

This is the code for the Beyond 1 Million Genomes (B1MG) website: https://b1mg-project.eu/. The B1MG project aims to make it easier for clinicians and researchers to find and  share genetic and clinical data across Europe. The project is funded by the European Union's Horizon 2020 Research and Innovation programme, and runs from June 2020 to October 2023.

**PLEASE NOTE: this is not a place to suggest changes in website content (through Pull Requests).** Changes in content need to pass through the relevant project participants. Feel free to create an issue for any more technical problems or suggestions, however.

Please contact Serena Scollen at serena.scollen@elixir-europe.org, or Martin Cook at martin.cook@elixir-europe.org, for
any questions or suggestions about content.

## Testing locally

The site uses PHP to make it easier to implement server-side features if needed. At the moment the use of PHP is minimal (it is just used for conditional includes and rendering frontmatter). The site is also intended to be simple, so that it requires no maintenance during and after the project (i.e. no code updates). So you will need local server to run the site, like MAMP, XAMPP or a Docker container like Devilbox (http://devilbox.org/). 

```
git clone https://github.com/elixir-europe/b1mg.git
```

Please note that if SSL is not configured on your localhost then please comment out the below lines from the .htaccess file
```
#RewriteCond %{HTTPS} !=on
#RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301,NE]
#Header always set Content-Security-Policy "upgrade-insecure-requests;"
```

## Website contacts

* Martin Cook ([@martin-nc](https://github.com/martin-nc)) 
* Prithviraj Mitra ([@rajxir](https://github.com/rajxir))
