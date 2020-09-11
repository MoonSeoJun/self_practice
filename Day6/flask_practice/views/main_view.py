from flask import Blueprint

bp = Blueprint('main', __name__, url_prefix='/')


@bp.route('/hello')
def hello():
    return "hello world"


@bp.route('/')
def index():
    return "index hello"
