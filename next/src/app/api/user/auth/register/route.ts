import { NextResponse } from "next/server";

export async function GET() {
    return NextResponse.json({
        success: 1,
        message: "データを取得!",
    });
}
