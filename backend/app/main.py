from fastapi import FastAPI

app = FastAPI(title="LoopCasts API")


@app.get("/health")
def health():
    return {"status": "ok"}
