# Hooliganz 0.5

This repository contains a Laravel backend and a Vue 3 frontend. Both parts can be run together using Docker Compose.

## Project structure

- `backend/` – Laravel application. See [`backend/README.md`](backend/README.md) for details.
- `frontend/` – Vue 3 application bootstrapped with Vite. See [`frontend/README.md`](frontend/README.md) for more information.
- `docker-compose.yml` – defines containers for the PHP app, MySQL, and the Vite development server.

## Building and running

1. Ensure Docker and Docker Compose are installed.
2. From the repository root, run:

   ```bash
   docker-compose up --build
   ```

This command builds the Docker images and starts the Laravel backend, MySQL database, and Vue frontend. The backend is available at <http://localhost:8000> and the frontend dev server at <http://localhost:5173>.

