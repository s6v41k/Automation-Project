# LoopCasts

LoopCasts BV is a fictional company for a university Automation Tools course
project. It used to run a PHP course-platform with a members area that had a
SQL-injection vulnerability (raw string concatenation in the login query) and
MD5 password hashing — see `starting-point/LoopCasts/` for the original
materials. This repo rebuilds it as a proper product:

- a Vue 3 course-platform frontend,
- a secure Python (FastAPI) backend,
- an n8n-driven subscription-lifecycle automation (renewal reminders,
  AI-assisted payment matching, lapsed-account deactivation).

## Running locally

1. `cp .env.example .env` and fill in real values.
2. `docker compose up -d --build`
3. `scripts/seed_db.sh` (added in Phase 2) to load sample data.

| Service       | URL                          |
|---------------|-------------------------------|
| Frontend      | http://localhost:5173        |
| Backend API   | http://localhost:8000 (docs at `/docs`) |
| MySQL         | localhost:3306                |
| Mailpit (mail catcher UI) | http://localhost:8025 |
| n8n           | http://localhost:5678        |

Mailpit catches all outgoing mail in dev — no real email is ever sent.

## Project phases

| Phase | What                                                        | Status |
|-------|--------------------------------------------------------------|--------|
| 1     | Infrastructure: repo, Docker Compose, CI, issue templates    | Done |
| 2     | Backend: FastAPI + MySQL data model, auth, internal API      | Not started |
| 3     | Frontend: Vue 3 course-platform UI                            | Not started |
| 4     | n8n subscription-lifecycle automation (the graded deliverable) | Not started |

See `CONTRIBUTING.md` for the branch model and PR flow.
