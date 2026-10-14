# Contributing

## Branch model

- `main` — stable, always deployable.
- `staging` — integration branch, where feature branches land first.
- `feature/<short-description>` — one branch per piece of work.

Flow: `feature/*` -> PR into `staging` -> (once verified) PR from `staging` into `main`.

Don't commit directly to `main` or `staging`.

## Pull requests

- Keep PRs scoped to one change.
- Link the issue it closes, if any.
- CI (`.github/workflows/ci.yml`) must pass before merging.

## Issues

Use the templates under `.github/ISSUE_TEMPLATE/` (bug, feature, chore).

## Secrets

Never commit `.env`. Copy `.env.example` to `.env` locally and fill in real values.
