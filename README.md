# Static Site Template

A template for sites with mainly static content and little dynamic content. It consists of a static frontend and a PHP backend.

## Setup

Put your static frontend files into [frontend/public](./frontend/public). Put your PHP files into [backend/public](./backend/public) and create routes for them in the [Caddyfile](./Caddyfile).

Build the docker image:
```bash
docker build -t static-site-template .
```

And start the server:
```bash
docker run -p 80:80 -p 8080:8080 static-site-template
```

## License

Copyright (C) Oliver Amann

This project is licensed under the MIT License (MIT). Please see [LICENSE](./LICENSE) for more information.
