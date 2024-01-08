import { FaXTwitter } from "react-icons/fa6";
import { Link } from "react-router-dom";

type Props = {
    url: string
    className: string
}

export default function Twitter(props: Props) {
    return (
        <Link to={props.url}>
            <FaXTwitter className={props.className} />
        </Link>
    )
}
