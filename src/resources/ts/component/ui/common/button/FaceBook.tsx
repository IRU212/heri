import { FaFacebook } from "react-icons/fa";
import { Link } from "react-router-dom";

type Props = {
    url: string
    className: string
}

export default function FaceBook(props: Props) {
    return (
        <Link to={props.url}>
            <FaFacebook className={props.className} />
        </Link>
    )
}

