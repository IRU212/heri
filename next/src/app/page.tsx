import Register from "@/components/layout/user/main/auth/Register";
import ProfileInfo from "@/components/layout/user/sub/ProfileInfo";

export default function Home() {
    return (
        <main className="flex content-cover">
            <div className="sub-content-cover">
                <ProfileInfo />
            </div>
            <div className="main-content-cover">
                <Register />
            </div>
            <div className="sub-content-cover">
                <div>
                    おすすめ記事
                </div>
                <div>
                    ランキング
                </div>
            </div>
        </main>
    )
}
