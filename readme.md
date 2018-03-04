# PRODUCT

## GET /products

Example: http://api-dashboard.dev/api/(project-name)/products

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Elementary"},
                    {"id": "834", "name": "Charter Schools"}
                ],
                "created": "126251302"
            }
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Pre-school"},
                ],
                "created": "126251302"
            }
        ]
    }

## POST /products

Example: http://api-dashboard.dev/api/(project-name)/products

Data : 

	{
		name 		: "book",
		weight 		: "12",
		sell_price	: "25000",
		buy_price	: "20000",
		description	: "some description",
		stock		: 200 //initial stok if exist
	}
	
Response body:

    {
       "status":"200",
       "message":"success"
    }

## PUT /products

Example: http://api-dashboard.dev/api/(project-name)/products/(id)

Data : 

	{
		name 		: "book",
		weight 		: "12",
		sell_price	: "25000",
		buy_price	: "20000",
		description	: "some description",
		stock		: 200 //initial stok if exist
	}

Response body:

    {
       "status":"200",
       "message":"update success"
    }

## DELETE /products

Example: http://api-dashboard.dev/api/(project-name)/products/(id)

Response body:

    {
       "status":"200",
       "message":"delete success"
    }


# CATEGORY

## GET /categories

Example: http://api-dashboard.dev/api/(project-name)/categories

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Elementary"},
                    {"id": "834", "name": "Charter Schools"}
                ],
                "created": "126251302"
            }
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Pre-school"},
                ],
                "created": "126251302"
            }
        ]
    }

## POST /categories

Example: http://api-dashboard.dev/api/(project-name)/categories

Data : 

	{
		name : "category"
	}

Response body:

    {
       "status":"200",
       "message":"success"
    }

## PUT /categories

Example: http://api-dashboard.dev/api/(project-name)/categories/(id)

Data : 

	{
		name : "category"
	}

Response body:

    {
        "status":"200",
       	"message":"update success"
    }

## DELETE /categories

Example: http://api-dashboard.dev/api/(project-name)/categories/(id)

Response body:

    {
        "status":"200",
       	"message":"delete success"
    }


# SUPPLIER

## GET /suppliers

Example: http://api-dashboard.dev/api/(project-name)/suppliers

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Elementary"},
                    {"id": "834", "name": "Charter Schools"}
                ],
                "created": "126251302"
            }
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Pre-school"},
                ],
                "created": "126251302"
            }
        ]
    }

## POST /suppliers

Example: http://api-dashboard.dev/api/(project-name)/suppliers

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
        ]
    }

## PUT /suppliers

Example: http://api-dashboard.dev/api/(project-name)/suppliers/(id)

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
        ]
    }

## DELETE /suppliers

Example: http://api-dashboard.dev/api/(project-name)/suppliers/(id)

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
        ]
    }


# TRANSACTION

## GET /transaction

Example: http://api-dashboard.dev/api/(project-name)/transaction

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Elementary"},
                    {"id": "834", "name": "Charter Schools"}
                ],
                "created": "126251302"
            }
            {
                "id": 2351,
                "type": "magazine",
                "title": "Public Schools",
                "tags": [
                    {"id": "125", "name": "Pre-school"},
                ],
                "created": "126251302"
            }
        ]
    }

## POST /transaction

Example: http://api-dashboard.dev/api/(project-name)/transaction

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
        ]
    }

## PUT /transaction

Example: http://api-dashboard.dev/api/(project-name)/transaction/(id)

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
        ]
    }

## DELETE /transaction

Example: http://api-dashboard.dev/api/(project-name)/transaction/(id)

Response body:

    {
        "results": [
            {
                "id": "1234",
                "type": "magazine",
                "title": "Public Water Systems",
                "tags": [
                    {"id": "125", "name": "Environment"},
                    {"id": "834", "name": "Water Quality"}
                ],
                "created": "1231621302"
            },
        ]
    }
