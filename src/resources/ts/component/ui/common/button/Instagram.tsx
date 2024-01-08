import { FaInstagramSquare } from "react-icons/fa";
import { Link } from "react-router-dom";

type Props = {
    url: string
    className: string
}

export default function Instagram(props: Props) {
    return (
        <Link to={props.url}>
            <FaInstagramSquare className={props.className} />
        </Link>
    )
}
