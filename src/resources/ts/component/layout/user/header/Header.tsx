import AccountCircle from "../../../ui/common/icon/AccountCircle";
import Notifications from "../../../ui/common/icon/Notifications";

export default function Header() {
    return (
        <div className="user-header-block">
            <div className="header-title-text">
                HERI
            </div>
            <div className="header-main-block">
                <div className="header-main-text">
                    EVENT
                </div>
                <div className="header-main-text">
                    SEARCH
                </div>
                <div className="header-main-text">
                    CATEGORY
                </div>
                <div className="header-main-text">
                    NEWS
                </div>
            </div>
            <div className="header-sub-block">
                <AccountCircle className="icon-element" size="40" />
                <Notifications className="icon-element" size="40" />
            </div>
        </div>
    )
}
