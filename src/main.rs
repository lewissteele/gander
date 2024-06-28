use clap::Parser;
use sqlx::mysql::MySqlPoolOptions;

#[derive(Parser)]
struct Args {
    host: String,
    username: String,
    database: String,
}

#[tokio::main]
async fn main() -> Result<(), sqlx::Error> {
    let args = Args::parse();

    let host = args.host;
    let username = args.username;
    let database = args.database;

    let pool = MySqlPoolOptions::new()
        .connect(format!("mysql://{username}@{host}/{database}").as_str())
        .await?;

    let result = sqlx::query("select * from users").execute(&pool).await?;

    println!(
        "rows affected {rows_affected}",
        rows_affected = result.rows_affected(),
    );

    Ok(())
}
