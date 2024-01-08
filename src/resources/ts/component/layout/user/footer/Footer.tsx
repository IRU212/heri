import FaceBook from "../../../ui/common/button/FaceBook";
import Instagram from "../../../ui/common/button/Instagram";
import Twitter from "../../../ui/common/button/Twitter";

export default function Footer() {
    return (
        <div className="user-footer">
            <div className="follow-us-block">
                <div className="follow-us-title">
                    FOLLOW US
                </div>
                <div className="follow-us-buttons-block">
                    <Twitter url="" className="twitter" />
                    <Instagram url="" className="instagram" />
                    <FaceBook url="" className="facebook" />
                </div>
            </div>
            <div className="content-block">
                <div className="content-title">
                    CONTENT
                </div>
                <div className="content-lists-block">
                    <div className="content-items-block">
                        <div>aaaa</div>
                    </div>
                    <div className="content-items-block">
                        <div>aaaa</div>
                    </div>
                    <div className="content-items-block">
                        <div>aaaa</div>
                    </div>
                </div>
            </div>
        </div>
    )
}
